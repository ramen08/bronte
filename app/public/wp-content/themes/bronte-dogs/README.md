# Bronte Dogs WordPress Theme

## SCSS Compilation Setup

This theme uses SCSS for styling. The CSS files are automatically generated from SCSS source files.

### Prerequisites

- Node.js (version 14 or higher)
- npm (comes with Node.js)

### Installation

1. Install dependencies:
   ```bash
   npm install
   ```

### Usage

#### Development (with auto-compilation)
```bash
npm run dev
```
This will watch your SCSS files and automatically recompile when changes are detected.

#### One-time compilation
```bash
npm run sass
```

#### Production build (minified)
```bash
npm run sass:build
```

### File Structure

- `css/style.scss` - Main SCSS file (edit this, not style.css)
- `css/_*.scss` - Partial SCSS files (imported by style.scss)
- `css/style.css` - Generated CSS file (do not edit directly)

### Important Notes

- **Always edit `style.scss` and its partial files, never edit `style.css` directly**
- The `style.css` file will be automatically overwritten when you compile
- Use `npm run dev` during development for automatic recompilation
- Use `npm run sass:build` for production builds (minified CSS)

### Available Scripts

- `npm run sass` - Compile SCSS to CSS once
- `npm run sass:watch` - Watch SCSS files and auto-compile on changes
- `npm run sass:build` - Compile SCSS to minified CSS for production
- `npm run dev` - Alias for sass:watch (recommended for development) 