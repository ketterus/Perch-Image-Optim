# Image Optimiser

The Perch Image Optimiser will compress images that are generated by the CMS. This will improve loading times reduce the bandwidth required for your site.

![Admin](https://redfinch.github.io/perch-image-optim/perch-optimiser-admin.png)

## Prerequisites

Before installing this package your site must be hosted on an environment that allows you to install and run other software through PHP such as a VPS. The application makes use of the following utilities:

* [JpegOptim](http://freecode.com/projects/jpegoptim)
* [Optipng](http://optipng.sourceforge.net/)
* [Pngquant 2](https://pngquant.org/)
* [SVGO](https://github.com/svg/svgo)
* [Gifsicle](http://www.lcdf.org/gifsicle/)

### Installing

To install the above on Ubuntu:

```bash
sudo apt-get install jpegoptim
sudo apt-get install optipng
sudo apt-get install pngquant
sudo npm install -g svgo
sudo apt-get install gifsicle
```

MacOS ([Homebrew](https://brew.sh/)):

```bash
brew install jpegoptim
brew install optipng
brew install pngquant
brew install svgo
brew install gifsicle
```

## Installation

### Requirements

* PHP >= 7
* Perch / Runway >= 3.0

### Adding to Perch

Upload the `redfinch_optim` directory to `perch/addons/apps`. Once complete you should see the app appear in the sidebar menu.

If not already, you should enable [Scheduled Tasks ](https://docs.grabaperch.com/perch/getting-started/installing/scheduled-tasks/)for the optimisation tasks to be automatically run.

### Configuration

Once installed there are a wide variety of settings that can be modified depending on your requirements:

* Enable or disable optimisation tools
* Set the compression amount
* Strip file meta data for smaller sizes
* Enable or disable SVG optimisation plugins

### Performance

The optimiser task will run once every 24 hours and will use a high level of CPU power to compress images. If you find that this is too much you can:

1. Reduce the compression level. PNG optimisation can be particularly resource intensive
2. Increase the image quality
3. Disable the particular optimiser.

You can additionally set a max execution time in the Perch settings panel. By default this is set to 30 seconds.

## Limitations

This addon will only work for images that are stored locally. Files using cloud storage providers such as Amazon S3 cannot be optimised using this tool.

If you are not on a platform that can install and run the tools listed in the prerequisites section then the official [Perch Kraken](https://addons.perchcms.com/addons/kraken) application may be suitable.

## Credits

[Spatie](https://spatie.be) and [Freek Van der Herten](https://github.com/freekmurze) for the [Image Optimizer](https://github.com/spatie/image-optimizer/) package.
