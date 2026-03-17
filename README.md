# wp-plugin-modes

A WordPress plugin skeleton with Figma plugin integration.

## Structure

```
wp-plugin-modes/
├── wp-plugin-modes.php          # Main WordPress plugin entry point
├── includes/
│   └── class-wp-plugin-modes.php  # Core plugin class
├── assets/
│   ├── css/
│   │   ├── admin.css            # Admin stylesheet
│   │   └── public.css           # Public stylesheet
│   └── js/
│       ├── admin.js             # Admin JavaScript
│       └── public.js            # Public JavaScript
├── figma/
│   ├── manifest.json            # Figma plugin manifest
│   ├── code.ts                  # Figma plugin main code (TypeScript)
│   └── ui.html                  # Figma plugin UI
├── languages/                   # Translation files
├── package.json                 # Node.js dependencies (Figma packages)
├── tsconfig.json                # TypeScript configuration
└── webpack.config.js            # Webpack build configuration
```

## WordPress Plugin Setup

1. Copy this folder to your WordPress `wp-content/plugins/` directory.
2. Activate the plugin from the WordPress admin dashboard.

## Figma Plugin Setup

1. Install Node.js dependencies:
   ```sh
   npm install
   ```

2. Build the Figma plugin:
   ```sh
   npm run build
   ```
   Or watch for changes during development:
   ```sh
   npm run dev
   ```

3. In Figma, open **Plugins → Development → Import plugin from manifest** and select `figma/manifest.json`.

## Installed Figma Packages

| Package | Description |
|---|---|
| `@figma/plugin-typings` | TypeScript type definitions for the Figma Plugin API |
| `figma-plugin-ds` | Figma Design System UI components for plugin UIs |
| `webpack` + `ts-loader` | Bundles TypeScript source for Figma's plugin runtime |
