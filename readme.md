## Preprocessor Requirements

 - Download & install [Node.js](https://nodejs.org/en/download/)
 - Install *```node-sass```* via command line: *```npm install -g node-sass```*

## Preprocessor Instructions

Listed below are instructions for compiling a *```.scss```* files into a *```.css```* file. In this example, we will compile *```stylesheet.scss```* to *```stylesheet.css```*. The newly compiled CSS file will only include the compressed styling.

 - How to Manually Compile SCSS to CSS:
   - Open command line within the root folder (or project css folder)
   - Run: *```node-sass stylesheet.scss stylesheet.css --output-style compressed```*