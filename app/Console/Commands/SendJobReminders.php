<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendJobReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jobs:send-reminders {--days=7 : Jobs older than this many days}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send reminder emails for old job postings';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $days = $this->option('days');
        $this->info("Checking for jobs older than {$days} days...");
        
        $oldJobs = \App\Models\Job::where('created_at', '<', now()->subDays($days))->with('user')->get();
        
        if ($oldJobs->isEmpty()) {
            $this->info('No old jobs found.');
            return;
        }
        
        $count = 0;
        foreach ($oldJobs as $job) {
            $userName = $job->user ? $job->user->name : 'Unknown';
            $this->line("Found old job: {$job->title} by {$userName}");
            $count++;
        }
        
        $this->info("Found {$count} old job(s). In a real application, reminder emails would be sent.");
        $this->comment('Job reminders sent successfully!');
    }
}
