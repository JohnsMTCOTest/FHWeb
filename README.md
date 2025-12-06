# Personal Funeral Planning Guide

A concise, student-friendly resource for planning your own funeral or memorial arrangements. The site explains service formats, disposition paths, and memorialization options in clear language so anyone can make informed choices.

## Pages
- **Home**: Overview of the guide with links to key sections.
- **Service Options** (`services.html`): Home funerals, funeral services, memorial services, graveside ceremonies, and burial at sea.
- **Disposition Paths** (`preplanning.html`): Traditional burial, green/natural burial, cremation, alkaline hydrolysis, and natural organic reduction with container/urn details and conflict checks.
- **Memorialization** (`obituaries.html`): Merchandise, experiential tributes, and participation ideas (reefs, space flight, soil donations, art glass, vinyl records, and more).
- **Planning Guides** (`contact.html`): Checklists, conversation starters, and next steps to document and share your plan.
- **About** (`about.html`): How to use the guide and important reminders.

## Development
Static HTML/CSS/JS only. Open `index.html` in a browser to preview.
```
.
├── assets
│   ├── css
│   │   └── site.css        # Custom site-wide styles
│   ├── images              # Existing artwork from the legacy theme
│   └── js
│       └── main.js         # Navigation toggle and smooth scrolling
├── index.html              # Homepage with service highlights
├── about.html              # History, mission, and team
├── services.html           # Detailed funeral, memorial, and cremation offerings
├── obituaries.html         # Sample obituary listings
├── preplanning.html        # Advance planning resources
└── contact.html            # Contact details and inquiry form
```

## Key Features

- Compassionate funeral home messaging across dedicated services, obituaries, preplanning, about, and contact pages.
- Responsive navigation with mobile drawer and smooth in-page scrolling.

## Local Development

Open any of the HTML files directly in your browser or serve the directory via a lightweight web server:

```bash
python3 -m http.server
```

Visit `http://localhost:8000` to preview the site.

## Deploying to GitHub Pages

1. Commit and push the repository to a GitHub repository (e.g., `username/johnson-funeral-home`).
2. In the repository settings, enable **Pages** and choose the `main` branch with the root directory.
3. The site will be available at `https://username.github.io/johnson-funeral-home/` (adjust for your username).

## Credits

Design, copy, and layout tailored for Johnson Funeral Home & Crematory. Built with ❤️ for families seeking compassionate care.
