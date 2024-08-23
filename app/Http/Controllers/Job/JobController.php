<?php
namespace App\Http\Controllers\Job;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Category;
use App\Models\ApplyJob;
use App\Models\JobSeeker;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $jobsQuery = Job::where('job_status', 'active');

        if ($request->filled('keyword')) {
            $keyword = $request->input('keyword');
            $jobsQuery->where(function ($query) use ($keyword) {
                $query->where('job_title', 'like', "%{$keyword}%")
                    ->orWhere('job_description', 'like', "%{$keyword}%")
                    ->orWhere('job_skills', 'like', "%{$keyword}%")
                    ->orWhere('job_location', 'like', "%{$keyword}%");
            });
        }

        if ($request->filled('location')) {
            $jobsQuery->where('job_location', 'like', '%' . $request->input('location') . '%');
        }

        if ($request->filled('category')) {
            $jobsQuery->where('category_id', $request->input('category'));
        }

        if ($request->has('sort')) {
            $sortOrder = $request->input('sort') == '1' ? 'desc' : 'asc';
            $jobsQuery->orderBy('created_at', $sortOrder);
        } else {
            $jobsQuery->orderBy('created_at', 'desc');
        }

        $jobs = $jobsQuery->paginate(10)->withQueryString();
        $categories = Category::all();
        $jobSeeker = JobSeeker::where('user_id', Auth::id())->first();

        return view('jobseeker.jobs', compact('jobSeeker', 'jobs', 'categories'));
    }

    public function searchJobsAjax(Request $request)
    {
        $jobsQuery = Job::where('job_status', 'active');

        if ($request->filled('keyword')) {
            $keyword = $request->input('keyword');
            $jobsQuery->where(function ($query) use ($keyword) {
                $query->where('job_title', 'like', "%{$keyword}%")
                    ->orWhere('job_description', 'like', "%{$keyword}%")
                    ->orWhere('job_skills', 'like', "%{$keyword}%")
                    ->orWhere('job_location', 'like', "%{$keyword}%");
            });
        }

        if ($request->filled('location')) {
            $jobsQuery->where('job_location', 'like', '%' . $request->input('location') . '%');
        }

        if ($request->filled('category')) {
            $jobsQuery->where('category_id', $request->input('category'));
        }

        if ($request->has('sort')) {
            $sortOrder = $request->input('sort') == '1' ? 'desc' : 'asc';
            $jobsQuery->orderBy('created_at', $sortOrder);
        } else {
            $jobsQuery->orderBy('created_at', 'desc');
        }

        $jobs = $jobsQuery->get();

        return response()->json(['jobs' => $jobs]);
    }

    public function jobDetail($id)
    {
        // Retrieve job details
        $job = Job::with(['jobType', 'category', 'company'])->findOrFail($id);

        // Check if the user is authenticated
        $user = Auth::user();
        $jobSeeker = null;
        $alreadyApplied = false;

        if ($user) {
            // Retrieve job seeker profile if user is authenticated
            $jobSeeker = JobSeeker::where('user_id', Auth::id())->first();

            // Check if the job has been applied
            if ($jobSeeker) {
                $alreadyApplied = ApplyJob::where('job_id', $job->id)
                    ->where('job_seeker_id', $jobSeeker->id)
                    ->exists();
            }
        }

        return view('jobseeker.job_detail', compact('jobSeeker', 'job', 'alreadyApplied'));
    }
    
}

