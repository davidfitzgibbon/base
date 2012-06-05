# BASE

A simple basic setup for creating a HTML and SASS site

_NOTE: you must have Compass and Susy installed to take advantage of the SASS helpers_. You can simply remove the sass folder and config.rb file, but then you'll have to write ordinary CSS... and who wants that?!

## WIDTH AND HEIGHT

ALL widths and heights, including line heights, should be set relative to the font size ($fs) or the line-height ($lh) if possible. This is especially applicable to media queries. If you leave the background grid on, you'll be able to see how wide/high your elements are in relation to the $fs (width) and $lh (hight). As you test your code in different sizes, you can all breakpoints on your elements using these grid blocks.

For example if your element needs to change layout when it's bigger than 10 grid blocks wide (the $fs * 10), simply include a media query like this:

@media (min-width: $fs*10)
	background: white

### base.sass

Susy config file. The width of the columns is bases on the font size ($fs)

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