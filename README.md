![Untitled](https://github.com/user-attachments/assets/374393b3-7c64-45f2-b4f5-f5d8d2deb268)



# EngageMetrics Landing Page

A modern, responsive landing page built with PHP (for includes), Tailwind CSS, and JavaScript. Features a dark design with glassmorphic elements and an animated lava lamp background in the hero section.

## Features

- **Modern Design**: Dark mode with glassmorphic UI elements
- **Animated Background**: Dynamic SVG "lava lamp" effect in the hero section
- **Responsive Layout**: Mobile-first design using Tailwind CSS
- **Animated Statistics**: JavaScript-powered counters
- **Modular Structure**: PHP includes for header and footer
- **Performance Optimized**: Minified assets and efficient animations

## Prerequisites

- PHP 7.4+ (only used for includes, no server-side processing)
- Node.js 14+ and npm

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/scottprints/engagemetrics.git
   cd engagemetrics
   ```

2. Install dependencies:
   ```bash
   npm install
   ```

3. Build Tailwind CSS (one-time build):
   ```bash
   npm run build
   ```

4. Start the PHP development server:
   ```bash
   php -S localhost:8000
   ```

5. Open your browser and navigate to `http://localhost:8000`

## Project Structure

```
engagemetrics/
├── assets/
│   ├── css/
│   │   └── styles.css
│   └── js/
│       └── counter.js
├── includes/
│   ├── header.php
│   └── footer.php
├── index.php
├── package.json
├── tailwind.config.js
└── README.md
```

## Development

- **PHP**: Used only for includes (header.php and footer.php)
- **Tailwind CSS**: Custom configuration in `tailwind.config.js`
- **JavaScript**: Vanilla JS for animations and interactivity

## Deployment

1. Build the Tailwind CSS:
   ```bash
   npm run build
   ```

## License

MIT License - feel free to use this project for your portfolio or personal projects.

## Credits

- Tailwind CSS for styling
- Custom SVG animations
- Vanilla JavaScript for interactivity 
