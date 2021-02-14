---
extends: _layouts.post
section: content
title: Importing employees
date: 2021-02-14
slug: importing-employees
categories:
description: One of the most important aspect of any software.
---

I've been working on [OfficeLife](https://officelife.io) for more than two years now, silently, patiently and very consistently. The number of features keeps growing, which makes me happy.

The goal of OfficeLife is to manage everything employees do in a company. From projects to time tracking to holidays.
However, there is no point for anyone to use the software if we don’t offer a simple way to import employees to the system in the first place.

The strength of OfficeLife appears when *all* the employees use the system.

In OfficeLife, right now, you can add employees, one by one, by hand. But who would use the Add employee screen 500 times to import a list from a medium-size company?

When I started developing OfficeLife, I wanted to provide a simple way to populate an account. This would serve two purposes:

* provide test data for developers on the project, so they can dive in the code right away and have a solid set of data ready for them to play with,
* provide a demo account on [OfficeLife.io](https://officelife.io), that would have realistic data that use all the features, so potential users/buyers can see quickly what the tool can do.

Very early in the development process, I wrote a [Laravel command](https://laravel.com/docs/master/artisan#writing-commands) that populate an account with realistic data. I [wrote about it here](./a_lazy_approach_to_demonstrate_what_your_product_can_do_for_your_users_the_Laravel_way). This served me well and still does today. I run this command every day. So I postponed the ability to import actual, real data, because I didn't need it. And also because uploading files is always a pain, no matter the framework, and can lead to many errors.

However, the future users of my tool will want to import employees so they can start using it. I can’t postpone the feature any longer.

There are two main things we could do about importing users.

* The first one is to connect OfficeLife to an Active Directory. A lot of companies use AD to manage the list of users. But I’m unsure right now if the companies which would be interested into what OfficeLife offers, actually use AD at all. Supporting AD in OfficeLife would be very costly at first, because I have no idea on how that works. Fortunately, there are some libraries for Laravel for this, but still, it would take a least a full month of work to make this happen, at the very minimum – for a feature that I’m not 100% sure people would use.
* The second option would be to import a CSV.

So I’m currently implementing the feature to upload a CSV of employees.

Like always in programming, there are many ways to write the feature.

Here is what I've decided to do (and I hope I won’t regret it in the future). It will be a three-step procedure:

* The user will upload a CSV. The user HAS to follow a strict convention to match the column names etc...
* Right after uploading the file, we will display a table showing all the entries in the file and for each line, if we've encountered any errors during upload (like a duplicated email address, or a malformed CSV).
* The user can review this table and decide if (s)he wants to actually import this data to the system. If (s)he agrees, actually create employees for each entry.

In programming terms, here is what it translates to:

* write a service that lets me import a file, regardless of the nature of the file. This brings the File object in my codebase. I will need the File object for many other aspects of the project anyway: adding receipts to expenses, avatars, on-boarding documents,...
* Before parsing the uploaded file, create an ImportJob. Parse the uploaded file, and for each line, create an ImportJobReport entry. This will contain the name, email etc... of each potential employee. Also, this lets me check that the entry is valid.
* Once the user agrees to import this data, we will call the `AddEmployeeToCompany` service for each one of these lines.

This is a bit complex, but the process will make sure we won’t import crap data to the system.

