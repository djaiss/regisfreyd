---
extends: _layouts.post
section: content
title: Documentation Driven Development
date: 2020-08-03
slug: documentation-driven-development
categories:
description: Start by writing the documentation before writing any code.
---

Documentation is hard and feels unrewarding. Therefore, it’s the last thing you write. When you start your project, you have a high level of motivation and this is how your development cycle looks like:

* Write feature
* Write tests
* Push features to production
* Write documentation
* Publish documentation

After a few months, your motivation starts to decrease and your development cycle looks like this:

* Write feature
* Write tests
* Push features to production
* Write documentation

Time passes. Your development cycle now looks like this:

* Write feature
* Write tests
* Push features to production

## The many benefits of a great documentation

Documentation is hard to write and hard to maintain. Even more at the end of the feature cycle, when you’ve forgotten all the edge cases you wrote.

It’s sad, because there are actually many benefits of having a great documentation, especially with side projects:

* It greatly helps the adoption of your project by other developers, as almost no one will work on your tool if you don't provide some kind of documentation.
* It’s free marketing. Documentation contains all the keywords necessary for your SEO, and you won’t have to write those shitty blog posts that most internet gurus tell you to write and no one wants to read.
* It’s really useful for your users, as most of them are not actually you, therefore needing guidance on how to use your tool.
* It reduces the number of customer support tickets you will have to answer to.

A complete, well-written documentation is always the sign of a great product. It’s easily the most powerful tool you have at your disposal if you know nothing about marketing and still want to gain some traction. READMEs are also a very powerful marketing tool that I should write about in the future.

## Change how you write softwares

I suggest to completely change how you write softwares.

Start with the documentation. That means: do not write a single line of code without having completely documented the feature you are about to write.

Then, write the code that supports this documentation, and write tests that match this code. Or write tests then the code if you are fan of TDD — it doesn’t really matter.

Sometimes, tests will show you that you missed something in your documentation. Update it accordingly.

Then push both the code and the documentation to production.

Later on, if you need to modify the feature, start by updating your documentation. Then update your code. Always start with the documentation.

Ideally, you would have a rule in your CI that prevent you from committing a feature without the associated documentation. I don't know how to do it programmatically, but you can simply have a checklist in your pull request template that lets you achieve this goal.

## Final note

I don't like methodologies in general. Don’t waste time with TDD, BDD and other methodologies that seem to be designed to slow down side projects.

What’s really important is a software

* That works,
* That is really fast,
* That has a great documentation so both developers and users will know how to use it.

Point 1 is covered by having tests. Write tests, always, but not too many.

Point 2 comes with experience. Making a software fast is a result of a lot of decisions and should be one of your priority, but you will only know how to it well after a few years of struggling with bad code.

Point 3 comes by forcing you to write documentation before you do anything.

Nothing else matters, really.
