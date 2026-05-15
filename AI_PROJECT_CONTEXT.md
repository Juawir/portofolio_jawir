# Portofolio Jawir - Project Context & Workflow Documentation

## Overview
**Portofolio Jawir** is a personal portfolio website built to showcase projects, professional experience, and contact information. It serves as an interactive digital resume with the ability to download the portfolio as a PDF document.

## Technology Stack
- **Framework:** Laravel 12 (PHP 8.2+)
- **Frontend/Styling:** TailwindCSS v4 with Vite
- **Deployment:** Configured for Vercel deployment (serverless architecture via `vercel.json` and `api/` directory)
- **Key Packages:** `barryvdh/laravel-dompdf` (for exporting the portfolio to PDF)

## Core Architecture
Unlike data-heavy applications, this portfolio relies primarily on static Blade views and simple routing, avoiding complex database schemas.

### Key Routes (`routes/web.php`)
- `/` - **Home**: The landing page introducing the professional profile (`resources/views/home.blade.php`).
- `/proyek` - **Projects**: Showcase of completed works and case studies (`resources/views/projects.blade.php`).
- `/pengalaman` - **Experience**: Work history and professional background (`resources/views/experience.blade.php`).
- `/kontak` - **Contact**: Form or links to get in touch (`resources/views/contact.blade.php`).
- `/download-portfolio` - **PDF Export**: Handled by `PortfolioController@downloadPortfolio` to generate a downloadable version of the portfolio.

### Deployment Configuration
This repository is configured to be deployed on **Vercel** using a serverless PHP environment.
- Any new features must be compatible with a serverless/stateless environment (e.g., sessions and file uploads may need special handling compared to a traditional VPS).
- The `api/` directory and `vercel.json` are critical for routing traffic on Vercel and should not be modified unless specifically adjusting deployment settings.

## Design Guidelines
- The application uses TailwindCSS v4.
- Since this is a personal portfolio, UI/UX is paramount. Maintain a clean, professional, and visually appealing layout.
- Ensure that all pages are fully responsive (mobile-first approach).
- Any PDF exports (`resources/views/pdf/`) should maintain a clean, printable layout that accurately reflects the web version's professionalism.

## AI Development Workflow Guidelines
When an AI assistant is working on this repository, it MUST adhere to the following rules:

1. **Content Management:** Content is largely managed directly within the Blade views rather than a database. Updates to experience, projects, or copy should be made in the respective `resources/views/*.blade.php` files.
2. **Tailwind Processing:** Ensure Tailwind utility classes are correctly formatted for v4. If new components are added, verify they build correctly via Vite.
3. **PDF Generation:** When updating the visual style of the web portfolio, always check if the corresponding PDF view (`resources/views/pdf/*`) needs to be updated to maintain consistency.
4. **Vercel Compatibility:** Do not introduce features that require a persistent local filesystem (like local image uploads) without considering external storage (like S3), as Vercel is stateless.
