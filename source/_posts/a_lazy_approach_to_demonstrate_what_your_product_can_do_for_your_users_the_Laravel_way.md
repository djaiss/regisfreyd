---
extends: _layouts.post
section: content
title: A lazy approach to demonstrate what your product can do for your users, the Laravel way
date: 2020-08-21
slug: a_lazy_approach_to_demonstrate_what_your_product_can_do_for_your_users_the_Laravel_way
categories:
description: A quick overview of all the available licences for your software.
---

When users end up on your SAAS marketing site, they want to see as quickly as possible what this product can do for them and how it will help. They want to see what the product can do **for real**. Screenshots are not enough. Videos are slightly better. Asking users to set up their accounts to see what it will look like is a no go, and the worst idea of all is to set up a button requesting a demo from a salesman.

The best way to demonstrate the capabilities and features of your product is to fill an account with a set of fake data, ideally without any lorem ipsum but actual words. How would you do that?

Several strategies let us achieve exactly that. We’ll discuss the pros and cons of each, from a marketing perspective and more importantly from a developer perspective.

* Upon account creation, fill the account with fake data for the user. This is what I call __the Basecamp way__.
* Ask the user to use a button to populate the account with fake data.
* Seed the database at the console level.

## First option: the Basecamp way

When you create an account in [Basecamp](https://basecamp.com), they automatically populate your account with 3 sample projects. Each one of them contains data that seem extremely real, alongside real photos and real comments and interactions. It’s a smart idea as the user can immediately jump in and see, for real, what the product does. However, users will have to find a way to dismiss this information and bring their account back to the original state. Granted, it’s not hard to find in Basecamp, but still.

From a Laravel developer perspective, here is what this approach means:

* Every time an account is created, you have to run a job (or a command that triggers a bunch of jobs) to fill the account with fake data. I suggest that you use queues for that, which Laravel makes it super easy to use.
* This job will actually block the account creation process, as you will need to make sure the job is done before displaying the welcome state to your users.
* That means having a mechanism in your views that will wait for the process to end. You can use several techniques for that, the best way being WebSockets with something like [Pusher](https://pusher.com) or your own Redis.
* If your site gains traction and you suddenly attract lots of visitors, the number of jobs will accumulate, the queue will get bigger and the signup process will take significantly more time.
* To prevent this, you can use more workers to work on the queue jobs, but it’s very likely that you still have only one master database so it won’t be much faster even if you add more workers.
* Another drawback, which is kind of inevitable, is the increase of the database’s size as every new user will have his account filled with fake data. Depending on the project’s size, this can accumulate quickly. Unless you provide a mechanism to remove this data, which is an entirely new feature in itself (more on that later).

This approach is a lot of work. It’s also a solution that we can throw money at, even though that’s a solution that most indie hackers don’t like: if you want to reduce the time jobs spend in the queues, you simply need a more powerful database server and your data will be processed faster.

## Second option: populate the account on demand

The second option is a bit simpler, but not that much. After having created the account, the user sees a message asking him if he wants to populate the account with a set of data so he can see what the product will look like.

What I like with this approach is the fact that the user will be in control. He will either choose to browse the product with all the possible blank states in the app, or browse it with a lot of fake data. However, it comes with the drawback of having one hard choice to make when you first land on the page: should you fill the account with all these data?

Technically, this option is slightly less complex than the first option. You won’t need to block the UI upon account creation - but you will still need some kind of mechanisms to show the user that the account is currently being populated.

## Third option: seed the account at the console level

This is the solution I’ve chosen for my upcoming application, OfficeLife.

OfficeLife will be available in several flavors: as a SAAS on officelife.io, and as a self-hosted option, available for free on GitHub, DockerHub, etc…
When you provide an open-source version of your software, you need to be very careful with all the options you provide to you and your future users. Every decision you make will affect everyone.

I’ve decided to provide a way to populate a dummy account, but only when the administrator of the instance will choose to. The solution is to provide a [custom Laravel command](https://laravel.com/docs/7.x/artisan) that will populate the account. You need to connect to a terminal and run the command. This will wipe the database, run all the migrations, create an account, and populate all the data.

The command is `php artisan setup:dummyaccount`. And the script is as follow (it has been greatly, greatly shortened as the original file is gigantic):

<script src="https://gist.github.com/djaiss/a2f1702a100da3febe60434b25e73df4.js"></script>

The advantages compared to previous solutions:

* The administrator is in complete control of when this process occurs.
* You won’t block any signup process as it’ll be executed behind the scenes before any user gets on the platform.
* Technically, it’s not complex per se.

However, with this solution, how would your users test your SAAS? It’s simple: create a separate instance from your main one, something like `demo.officelife.io`. This link would be available from your marketing site, probably on the header, and would be separate from the page where your users would signup for real.

This instance would have a cron that would run every 5 minutes, which would trigger the `setup:dummyaccount` command. On the login page, simply indicate the login and password that the users need to enter to be logged, and here we go - users have a complete account to play with, with no drawbacks.

Why would the script run every 5 minutes?

* To prevent users from entering too much garbage. If you don’t reset the database at a regular interval, users would create too much fake data and the quality of the data, that all test users would see,  would drastically be degraded.

The technical complexity of this solution is limited. The command is pretty simple to write. There are two things to set up in your app:

* Setup the cron that triggers the command every 5 minutes. Laravel makes it dead easy and has a [good documentation for this](https://laravel.com/docs/7.x/scheduling#scheduling-artisan-commands).
* Put in place a message in the header of your app, that will warn users the app is reset every 5 minutes.

### Removing fake data from the database

Removing fake data means having the ability to know which data is fake. What does it mean?

In my apps, I mainly use services to do anything that talks to the database. I call them services, but it’s also called [action classes](https://freek.dev/1371-refactoring-to-actions), commands, or a few other terms. The name doesn’t matter.

In every service of my app, one of the parameters needed by the service is a boolean that indicates whether the data is dummy data or not. Take a look at how it’s being used in the snippet below (not working code):

<script src="https://gist.github.com/djaiss/8b0420330e378994bbe7508a368b66e1.js"></script>
