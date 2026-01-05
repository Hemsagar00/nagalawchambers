# NAGA Legal Chambers ⚖️

**Official Website of NAGA Legal Chambers | Land, Revenue & Property Law Specialists**

A premium, institutional-grade legal website designed with a "Calm Luxury" aesthetic, featuring AI-powered legal intelligence tools and a searchable judgments dashboard.

![Design Theme](https://via.placeholder.com/800x200/121212/D4AF37?text=NAGA+Legal+Chambers+-+Calm+Luxury)

## 🌟 Key Features

### 1. "Calm Luxury" Design System
- **Palette**: Charcoal (`#121212`) & Ivory (`#F5F5F0`) with Muted Gold (`#D4AF37`) accents.
- **Typography**: *Playfair Display* (Headings) & *Inter* (Body).
- **UX**: Minimalist animations, "reveal" scroll effects, and a responsive layout.

### 2. Legal Intelligence & AI Tools
- **10+ AI Tools**: Specialized interfaces for Rental Agreements, Legal Notices, Title Verification, etc.
- **Judgments Dashboard**: A searchable database of case laws (`judgments.html`) with client-side filtering (Court, Year, Topic).
- **AI Summaries**: "Why This Matters" cards providing instant context for complex judgments.

### 3. Backend Automation
- **RSS Scraper**: `fetch_acts.php` automates the ingestion of new legal updates from RSS feeds into `judgments_data.json`.
- **Mock Data**: Pre-populated with 50+ sample judgments for demonstration.

### 4. Compliance & Accessibility
- **Dedicated Pages**: `privacy.html`, `terms.html` (with AI Disclosure), and `legal.html`.
- **Localization**: English & Telugu toggle support.
- **Accessibility**: High contrast text and semantic HTML structure.

---

## 📂 Project Structure

```bash
nagalawchambers.com/
├── index.html          # Main landing page (Hero, About, Practices, AI Tools)
├── judgments.html      # Searchable Judgments Dashboard
├── judgments_data.json # JSON database for judgments (Mock + Scraped)
├── contact.html        # Contact info & Map placeholder
├── privacy.html        # Privacy Policy
├── terms.html          # Terms of Service & AI Disclosure
├── fetch_acts.php      # Backend script for RSS ingestion
├── chatbot.js          # WhatsApp/Call widget logic
└── README.md           # Project Documentation
```

## 🚀 Setup & Usage

### 1. Static Site (Global)
This project is primarily static (HTML/CSS/JS). It can be hosted on:
- **GitHub Pages**
- **Netlify / Vercel**
- **Apache / Nginx**

### 2. Backend Scraper (Optional)
To enable the auto-updating Judgments System:
1.  Host on a PHP-enabled server (e.g., Apache/Nginx with PHP 7.4+).
2.  Set `judgments_data.json` permissions to writable (`chmod 664` or `775`).
3.  Run the script manually or via Cron:
    ```bash
    php fetch_acts.php
    ```
    *(Note: This scrapes a sample RSS feed. Configure `$url` in `fetch_acts.php` for production sources.)*

## 🛠️ Development

**Prerequisites:**
- Git
- VS Code (Recommended)
- Live Server (for local testing)

**Clone & Run:**
```bash
git clone https://github.com/Hemsagar00/nagalawchambers.git
cd nagalawchambers.com
# Open index.html in your browser or use Live Server
```

## 📄 License & Contact
**NAGA Legal Chambers**
📍 District Court Premises, Anantapur, AP - 515001
📞 +91 7036666089
📧 contact@nagalawchambers.com

---
*© 2026 NAGA Legal Chambers. All Rights Reserved.*
