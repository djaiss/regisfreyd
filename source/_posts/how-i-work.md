---
extends: _layouts.post
section: content
title: How I work (2020 edition)
date: 2020-05-02
slug: how-i-work-2020-edition
categories:
description: The setup I use on a daily basis to do some work.
---

As a developer, few things are as important as your setup to help you have productive days. After years of trials and errors, I’m currently in a state where I love every single tool that I use every day.

## Text editor

After years of working with [Sublime Text](https://www.sublimetext.com/) and [Vim](https://www.vim.org/), I've been using VS Code as my primary editor for a couple of years now. Even though it’s built on top of Electron, it’s just great. I agree it’s not as fast as Sublime Text for opening and manipulating files, but the amount of usefulness it brings, whereas as core features or through extensions, is unmatched. I've also tried PHPStorm multiple times, but this IDE tries to do too much and I miss some keyboard shortcuts. I probably could fine tune it to my taste, as I know everything is customizable inside PHPStorm, but I’m a developer, so I’m lazy.

Therefore, VS Code. In the editor, I try to reduce the noise as much as possible. I would never understand why you would need the minimap, for instance. Yes, it’s pretty, but do you need to browse your files that way? Anyway...

Here is a screenshot of my editor.

![vscode](/assets/img/vscode.png)

### Theme

* Monokai is my go-to theme. It's not the prettiest, but it has the right readibility/noise ratio that allows me to browse and write code efficiently. It also ships by default with VS Code.

### Extensions

* [Auto Close Tag](https://marketplace.visualstudio.com/items?itemName=formulahendry.auto-close-tag): this extension automatically closes HTML tags. Useful when doing front-end stuff.
* [Color Highlight](https://marketplace.visualstudio.com/items?itemName=naumovs.color-highlight): adds a border of color around every hexadecimal color defined in your CSS. Somewhat useful.
* [DotENV](https://marketplace.visualstudio.com/items?itemName=mikestead.dotenv): adds syntax highlighting to .env files. Very useful for all my Laravel projects.
* [EditConfig for VS Code](https://marketplace.visualstudio.com/items?itemName=EditorConfig.EditorConfig): Adds support to [editorconfig files](https://editorconfig.org/). This lets you maintain consistent coding styles for multiple developers working on the same project across various editors and IDEs.
* [GitLens](https://marketplace.visualstudio.com/items?itemName=eamodio.gitlens): I use for only one feature: the ability to see who last changed the current line, straight inside the editor. It’s an easy way to git blame any lines, basically.
* [IntelliSense for CSS class names in HTML](https://marketplace.visualstudio.com/items?itemName=Zignd.html-css-class-completion): this provides CSS class name completion in your HTML files. Really useful, especially since I barely write CSS anymore thanks to functional CSS. I've been using functional CSS for 2-3 years now and I couldn't go back to writing regular CSS. Want to know more about it? Read [this awesome article](https://adamwathan.me/css-utility-classes-and-separation-of-concerns/) by Adam Wathan or dive into those great CSS frameworks ([Tachyions](https://tachyons.io/) and [TailwindCSS](https://tailwindcss.com/)).
* [laravel-blade](https://marketplace.visualstudio.com/items?itemName=cjhowe7.laravel-blade): adds syntax highlighting for Laravel's blade.
* [Markdown TOC](https://marketplace.visualstudio.com/items?itemName=AlanWalk.markdown-toc): generates table of contents automatically in all the markdown documents I write (specifically [Monica's technical documentation](https://github.com/monicahq/monica)).
* [PHP DocBlocker](https://marketplace.visualstudio.com/items?itemName=neilbrayfield.php-docblocker): this automatically adds the necessary docblocks above your methods as you type `/**`.
* [PHP Extension Pack](https://marketplace.visualstudio.com/items?itemName=felixfbecker.php-pack): contains the core PHP extensions that you need to get PHP up and running in VS Code.
* [PHP Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client): The best extension to provide code completion for your PHP. Also, it also imports classes as you type, and this is awesome.
* [Sublime Text Keymap and Settings Importer](https://marketplace.visualstudio.com/items?itemName=ms-vscode.sublime-keybindings): because I come from Sublime, there are some texts that I wanted to use in VS Code.
* [Syncing](https://marketplace.visualstudio.com/items?itemName=nonoroazoro.syncing): I have multiple computers, and I need to sync my settings, shortcuts, themes and everything else between those machines easily. I use Syncing to achieve this goal. It’s not a popular extension but it works better than the [most used one](https://marketplace.visualstudio.com/items?itemName=Shan.code-settings-sync).
* [Vetur](https://marketplace.visualstudio.com/items?itemName=octref.vetur): adds syntax highlighting and linting to your Vue files.
* [vscode-icons](https://marketplace.visualstudio.com/items?itemName=vscode-icons-team.vscode-icons): a set of nice eye-candy icons that I enjoy.
* [Wakatime](https://marketplace.visualstudio.com/items?itemName=WakaTime.vscode-wakatime): I've been using Wakatime to automatically track the time I spent in my code editor on a weekly basis. The free plan sends me an email every week about the number of hours I spend in each of my projects. Right now, as everything I do is done on the side, I spend around 20 hours per week on my projects.

### Terminal

I use [iTerm2](https://www.iterm2.com/) as my terminal of choice. It still uses Bash, unfortunately, but I know I’ll have to migrate to ZSH when I’ll migrate to a new computer.

![vscode](/assets/img/terminal.png)

### macOS

MacOS is my OS of choice. My friends think I’m an Apple fan boy, but it’s not true. I just adore this OS, even though they keep adding stuff that I don't value at all (Twitter and Facebook integration right in the OS – wtf), and removing features that I valued a lot (the ability to switch desktops without animation). But despite those changes, macOS is extremely elegant. No other OSes come close to this level of polish.

![vscode](/assets/img/desktop.png)

* I don't like dark mode in macOS. So I've simply disabled it entirely.
* The dock is always on the left part of the screen, and is always hidden.



* Whenever I can, I install all softwares with [brew cask](https://github.com/Homebrew/homebrew-cask). If you know Homebrew, Cask works in a similar fashion. For instance, to install 1Password, you would just need to run `brew cask install 1password` and the install process is handled automatically. But the really good part, is that you can actually automate this process in a dotfile. That way when you setup a new machine, you just run your script and all is set for you.
