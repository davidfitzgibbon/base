# BASE

A simple basic setup for creating a HTML and SASS site

## Help!
I'm trying to make this framework a little more professional. if anyone out there is actually using it please feel free to fork. 

Any and all help, tips, thoughts, advice, muffins and opinions welcome (muffins especially)!

_NOTE: you must have Compass installed to take advantage of the SASS helpers_. If you want to write plain CSS you can simply remove the sass folder and config.rb file, but then you'll have to write plain CSS... and who wants that?!

## WIDTH AND HEIGHT

ALL widths and heights, including line heights, should be set relative to the font size ($fs) or the line-height ($lh) if possible. This is especially applicable to media queries. If you leave the background grid on, you'll be able to see how wide/high your elements are in relation to the $fs (width) and $lh (hight). As you test your code in different sizes, you can all breakpoints on your elements using these grid blocks.

For example if your element needs to change layout when it's bigger than 10 grid blocks wide (the $fs * 10), simply include a media query like this:

@media (min-width: $fs*10)
	background: white

### helpers.sass

There are some basic takings from the HTML5 boilerplate, Harry Roberts blog and a few simple helpers of my own for SASS.

### includes.sass

The file where everything is included. Comment out or delete files you do not want to show from this file.

### queries.sass

A simple file to show you what media query you're currently viewing. Remove/comment out of includes for production.

### show_grid.sass

A simple file that puts a grid behind the #container so you can see your font-size/line-height grid boxes

## Facebook

You might also want to have a look at [Facebook Base](https://github.com/davidfitzgibbon/facebook-base) for some basic setup for Facebook Apps too.