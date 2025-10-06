# Images Directory

This directory will contain all visual assets for the ForeverBox Initiative website.

## Current Status

This directory currently uses placeholder elements in the HTML/CSS. See `IMAGES-NEEDED.md` for a comprehensive list of required images.

## Organization

Once images are added, organize them as follows:

```
images/
├── heroes/          # Hero/banner images for each page
├── portraits/       # Dr. Zeon7 and team portraits
├── laboratory/      # Lab and facility photography
├── landscapes/      # Welsh scenery and nature
├── app-mockups/     # Forever Fit app screenshots
├── abstract/        # Scientific visualizations
├── icons/           # Logo and icon assets
└── lifestyle/       # Activity and community images
```

## Adding Images

When adding images to this directory:

1. Optimize for web (compress without losing quality)
2. Use descriptive filenames (e.g., `dr-zeon7-portrait-main.jpg`)
3. Include WebP versions where possible
4. Update alt text in the corresponding PHP files
5. Test responsive behavior across devices

## Placeholders

Current pages use CSS gradient placeholders with SVG icons. These can be easily replaced by updating the respective page files to use `<img>` tags or CSS `background-image` properties pointing to actual image files.
