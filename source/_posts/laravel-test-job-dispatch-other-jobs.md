---
extends: _layouts.post
section: content
title: How to test that a job dispatches another job in Laravel
date: 2020-08-15
slug: laravel-test-job-dispatches-other-jobs
categories:
description: Bypass the Queue::fake to test dispatched jobs from a job.
---

Sometimes, in your Laravel application, you need a job that will dispatch other jobs. For instance, a cron that triggers a job to calculate the activity of all users, and this job triggers a single job for each user.

The only way to know if the second job gets triggered is to fake the Bus chain, using `Queue::fake` at the beginning of your tests. 

But if you do that, you will only test that the first job get dispatched. It will be dispatched, but not executed - therefore, the secondary jobs won’t be dispatched at all.

How do you test that all the secondary jobs were effectively dispatched?

<script src="https://gist.github.com/djaiss/b59b872832be5027cc9dfca6a776a469.js"></script>

Instead of calling the first job in a more traditional way, like `FirstJob()::dispatch()`, we need to instantiate it and call both the dispatch() and handle() methods to actually bypass the fact that the first job isn't really dispatched thanks to the calling the Queue::fake() method.
