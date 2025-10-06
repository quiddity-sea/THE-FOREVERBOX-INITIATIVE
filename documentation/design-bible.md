# ForeverBox Initiative - Design Bible

A comprehensive guide to typography, spatial design, UI patterns, and animations for the ForeverBox Initiative website.

---

## 1. Typography System

### Primary Typeface: Inter

The entire site uses **Inter** as the primary typeface, a modern sans-serif font optimized for screen readability.

**Font Import:**
```css
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
```

### Font Weight Scale

| Weight | Usage | Example |
|--------|-------|---------|
| 300 (Light) | Subtle secondary text, captions | Supporting descriptions |
| 400 (Regular) | Body text, paragraphs | Main content, descriptions |
| 500 (Medium) | Navigation links, buttons | Primary UI elements |
| 600 (Semi-Bold) | Subheadings, emphasized text | Section headers |
| 700 (Bold) | Page titles, primary headings | H2, H3 elements |
| 800 (Extra-Bold) | Hero headings | H1 elements |
| 900 (Black) | Reserved for special emphasis | Rare, impactful moments |

### Typography Hierarchy

#### Heading Levels

**H1 - Hero Headings**
- Font Size: `3.75rem` (60px) on desktop, `2.5rem` (40px) on mobile
- Font Weight: 800
- Line Height: 1.1
- Letter Spacing: `-0.02em` (tight)
- Usage: Page hero sections only
- Example: "The ForeverBox Initiative"

**H2 - Section Headings**
- Font Size: `2.25rem` (36px) on desktop, `1.875rem` (30px) on mobile
- Font Weight: 700
- Line Height: 1.2
- Letter Spacing: `-0.01em`
- Usage: Major section dividers
- Example: "Our Journey", "The Science"

**H3 - Subsection Headings**
- Font Size: `1.5rem` (24px) on desktop, `1.25rem` (20px) on mobile
- Font Weight: 700
- Line Height: 1.3
- Letter Spacing: Normal
- Usage: Content cards, subsections
- Example: "Origin", "Science"

**H4 - Minor Headings**
- Font Size: `1.25rem` (20px)
- Font Weight: 600
- Line Height: 1.4
- Usage: Small content sections

#### Body Text

**Paragraph - Regular Body**
- Font Size: `1rem` (16px) on desktop, `0.9375rem` (15px) on mobile
- Font Weight: 400
- Line Height: 1.6
- Max Width: `65ch` for optimal readability
- Color: `#ffffff` on dark backgrounds, `#e5e5e5` for secondary text

**Large Lead Text**
- Font Size: `1.25rem` (20px)
- Font Weight: 400
- Line Height: 1.6
- Usage: Introductory paragraphs, hero subtitles

**Small Text / Captions**
- Font Size: `0.875rem` (14px)
- Font Weight: 400
- Line Height: 1.5
- Color: `rgba(255, 255, 255, 0.7)`
- Usage: Image captions, footnotes, metadata

### Text Rendering Optimization

```css
* {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
```

This ensures crisp, consistent text rendering across all browsers and operating systems.

---

## 2. Color System

### Page-Specific Color Identities

Each editorial section has a unique color identity to create distinct visual experiences:

#### Origin (Deep Blue)
```css
primary: #1a237e    /* Deep indigo blue */
secondary: #3949ab  /* Lighter indigo */
```
- **Emotion:** Trust, depth, introspection
- **Usage:** Origin story page, Dr. Zeon7's journey

#### Science (Teal Green)
```css
primary: #004d40    /* Deep teal */
secondary: #00897b  /* Lighter teal */
```
- **Emotion:** Innovation, growth, nature
- **Usage:** Scientific explanations, research

#### Case Studies (Deep Red)
```css
primary: #b71c1c    /* Deep red */
secondary: #e53935  /* Lighter red */
```
- **Emotion:** Passion, transformation, urgency
- **Usage:** Real-world results, testimonials

#### Forever Fit (Amber/Gold)
```css
primary: #f57f17    /* Rich amber */
secondary: #fbc02d  /* Bright gold */
```
- **Emotion:** Energy, optimism, accessibility
- **Usage:** Forever Fit app page

#### Investment (Purple)
```css
primary: #4a148c    /* Deep purple */
secondary: #7b1fa2  /* Lighter purple */
```
- **Emotion:** Luxury, opportunity, vision
- **Usage:** Investment opportunity page

#### Vision (Light Blue)
```css
primary: #01579b    /* Deep blue */
secondary: #0288d1  /* Sky blue */
```
- **Emotion:** Future, clarity, aspiration
- **Usage:** Roadmap, vision page

### Neutral Colors

```css
Black: #000000           /* Primary background */
Dark Gray: #1a1a1a       /* Secondary backgrounds */
Medium Gray: #333333     /* Borders, dividers */
Light Gray: #e5e5e5      /* Light text on dark */
White: #ffffff           /* Primary text on dark */
```

### Gradient Usage

**Hero Section Gradients:**
All hero sections use a three-color gradient pattern:
```css
background: linear-gradient(to bottom right, 
    [page-primary-color], 
    [page-secondary-color], 
    #000
);
```

Example for Origin page:
```css
background: linear-gradient(to bottom right, #1a237e, #3949ab, #000);
```

### Opacity & Transparency

- Navigation background: `rgba(0, 0, 0, 0.8)` with backdrop blur
- Hover states: Reduce opacity to `0.8`
- Secondary text: `rgba(255, 255, 255, 0.7)`
- Disabled states: `rgba(255, 255, 255, 0.4)`

---

## 3. Spatial Design & Layout

### Grid System

The site uses Tailwind CSS's responsive grid system with custom breakpoints:

**Breakpoints:**
```css
sm: 640px    /* Mobile landscape */
md: 768px    /* Tablet */
lg: 1024px   /* Desktop */
xl: 1280px   /* Large desktop */
2xl: 1536px  /* Extra large screens */
```

### Container Widths

**Standard Container:**
```css
max-width: 1280px (xl breakpoint)
padding: 1.5rem (24px) on mobile
padding: 3rem (48px) on desktop
```

### Spacing Scale

The site follows a consistent spacing scale based on multiples of 8px:

| Size | Pixels | Usage |
|------|--------|-------|
| 1 | 4px | Minimal spacing |
| 2 | 8px | Tight spacing |
| 4 | 16px | Standard spacing |
| 6 | 24px | Section padding |
| 8 | 32px | Large spacing |
| 12 | 48px | Extra large spacing |
| 16 | 64px | Section dividers |
| 24 | 96px | Major section breaks |
| 32 | 128px | Hero section padding |

### Vertical Rhythm

- **Section Padding:** Minimum 4rem (64px) top and bottom
- **Hero Sections:** Minimum height of 100vh on desktop, 80vh on mobile
- **Content Sections:** 6rem (96px) vertical spacing between major sections
- **Paragraph Spacing:** 1.5rem (24px) between paragraphs

### Horizontal Spacing

- **Content Width:** Maximum 65 characters for body text (optimal readability)
- **Wide Content:** Maximum 80 characters for wider layouts
- **Cards/Grid Items:** 1.5rem (24px) gap on mobile, 2rem (32px) on desktop

---

## 4. Component Design Patterns

### Navigation

**Desktop Navigation:**
- Fixed position at top
- Background: `rgba(0, 0, 0, 0.8)` with `backdrop-blur-lg`
- Height: 80px
- Logo: Left-aligned, font-size 1.5rem, font-weight 700
- Nav links: Horizontal, font-size 1rem, font-weight 500
- Hover effect: Color transition to page-specific color

**Mobile Navigation:**
- Hamburger menu icon (right-aligned)
- Full-screen overlay menu
- Vertical stacked links
- Backdrop blur effect

### Buttons

**Primary Button:**
```css
padding: 1rem 2rem
font-size: 1rem
font-weight: 600
border-radius: 0.5rem
background: gradient from page primary color
transition: transform 0.2s, opacity 0.2s
hover: scale(1.05), opacity 0.9
```

**Secondary Button:**
```css
padding: 0.75rem 1.5rem
font-size: 0.875rem
font-weight: 500
border: 1px solid rgba(255, 255, 255, 0.3)
background: transparent
hover: background rgba(255, 255, 255, 0.1)
```

### Cards

**Standard Content Card:**
- Background: `rgba(255, 255, 255, 0.05)`
- Border: 1px solid `rgba(255, 255, 255, 0.1)`
- Border radius: 1rem (16px)
- Padding: 2rem (32px)
- Hover: Transform translateY(-4px), shadow increase

**Hero Cards (Homepage Journey Section):**
- Larger format with background gradients
- Icon or image at top
- Heading + subtitle
- Click/tap to navigate

### Forms

**Input Fields:**
```css
background: rgba(255, 255, 255, 0.05)
border: 1px solid rgba(255, 255, 255, 0.2)
border-radius: 0.5rem
padding: 0.75rem 1rem
font-size: 1rem
color: white
focus: border-color changes to page primary color
```

**Labels:**
```css
font-size: 0.875rem
font-weight: 500
margin-bottom: 0.5rem
color: rgba(255, 255, 255, 0.9)
```

### Image Treatment

**Hero Images:**
- Full-width background images
- Gradient overlay for text readability
- Parallax scroll effect (30% movement)
- Scale effect (1.3x zoom during scroll)

**Content Images:**
- Border radius: 0.75rem (12px)
- Subtle shadow for depth
- Lazy loading enabled
- WebP format with fallbacks

**Cinematic Images:**
- Large format (minimum 1200px wide)
- 1.5x scale animation on scroll into view
- Fade-in effect
- Used for impactful moments

---

## 5. Animation System

All animations use **GSAP (GreenSock Animation Platform) v3.12** with ScrollTrigger plugin.

### Core Animation Principles

1. **Respect User Preferences:** All animations disabled if user has `prefers-reduced-motion` enabled
2. **Performance First:** Use GPU-accelerated properties (transform, opacity)
3. **Subtle & Purposeful:** Animations enhance, never distract
4. **Consistent Timing:** Use standardized easing curves

### Animation Classes

#### .fade-in
**Effect:** Element fades in and moves up slightly
```javascript
opacity: 0 → 1
y: 20px → 0
duration: 0.8s
ease: power2.out
trigger: On scroll into view
```
**Usage:** Body text, paragraphs, secondary content

#### .slide-left
**Effect:** Element slides in from the right
```javascript
opacity: 0 → 1
x: 50px → 0
duration: 1s
ease: power3.out
trigger: On scroll into view
```
**Usage:** Headings, primary content

#### .slide-right
**Effect:** Element slides in from the left
```javascript
opacity: 0 → 1
x: -50px → 0
duration: 1s
ease: power3.out
trigger: On scroll into view
```
**Usage:** Images, alternate content

#### .scale-image
**Effect:** Image scales up from smaller size
```javascript
scale: 0.8 → 1
opacity: 0 → 1
duration: 1.2s
ease: power2.out
trigger: On scroll into view
```
**Usage:** Featured images, graphics

#### .stagger-list
**Effect:** List items appear one after another
```javascript
opacity: 0 → 1
y: 20px → 0
duration: 0.5s per item
stagger: 0.1s between items
ease: power2.out
trigger: When list enters viewport
```
**Usage:** Feature lists, bullet points, navigation menus

#### .counter (data-target="[number]")
**Effect:** Animated number counting up
```javascript
textContent: 0 → data-target value
duration: 2s
ease: power1.out
trigger: On scroll into view
```
**Usage:** Statistics, metrics, achievements

#### .hero-section with .hero-bg
**Effect:** Parallax background scroll with zoom
```javascript
background image:
  yPercent: 0 → 30
  scale: 1 → 1.3
duration: Tied to scroll
ease: none (linear)
scrub: true
```
**Usage:** Hero sections on all major pages

### Scroll Animations

**Navigation Fade:**
- After scrolling 80px, navigation gains solid background
- Smooth transition over 0.3s

**Parallax Effects:**
- Background images move at 30% of scroll speed
- Creates depth and visual interest

**Reveal on Scroll:**
- Content reveals as user scrolls down
- Prevents overwhelming initial load
- Maintains engagement through discovery

### Hover Animations

**Links:**
```css
transition: color 0.2s ease, opacity 0.2s ease
hover: color changes to page-specific accent
```

**Buttons:**
```css
transition: transform 0.2s ease, opacity 0.2s ease
hover: transform scale(1.05), opacity 0.9
```

**Cards:**
```css
transition: transform 0.3s ease, box-shadow 0.3s ease
hover: transform translateY(-4px), shadow increases
```

### Timing Functions (Easing)

- **power1.out:** Gentle deceleration (subtle animations)
- **power2.out:** Moderate deceleration (most animations)
- **power3.out:** Strong deceleration (dramatic entrances)
- **power4.out:** Very strong deceleration (impactful moments)
- **none:** Linear (parallax, scroll-tied animations)

---

## 6. Accessibility & Neurodivergent-First Design

### Core Principles

1. **High Contrast:** White text on black backgrounds (21:1 contrast ratio)
2. **Clear Focus Indicators:** 3px solid outline on focused elements
3. **Keyboard Navigation:** Full site accessible via keyboard alone
4. **Reduced Motion Support:** All animations respect `prefers-reduced-motion`
5. **Semantic HTML:** Proper heading hierarchy, landmarks, ARIA labels
6. **Flexible Typography:** Text scales with browser settings

### Focus Styles

```css
*:focus-visible {
    outline: 3px solid currentColor;
    outline-offset: 2px;
}
```

### Reduced Motion

```css
@media (prefers-reduced-motion: reduce) {
    *, *::before, *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }
}
```

### High Contrast Mode

```css
@media (prefers-contrast: high) {
    body {
        background-color: #000;
        color: #fff;
    }
}
```

### Touch Targets

- Minimum size: 44px × 44px (WCAG 2.1 AAA)
- Spacing between targets: Minimum 8px
- Applies to all buttons, links, form controls

### Screen Reader Considerations

- All images have descriptive alt text
- Navigation has proper landmarks
- Forms have associated labels
- ARIA labels for icon-only buttons
- Skip-to-content links available

---

## 7. Responsive Design Strategy

### Mobile-First Approach

Design starts at 320px width and scales up.

### Key Breakpoints & Adjustments

**Mobile (< 768px):**
- Single column layout
- Hamburger menu navigation
- Font sizes reduced by ~15%
- Hero sections: 80vh minimum height
- Padding reduced to 1.5rem
- Cards stack vertically

**Tablet (768px - 1024px):**
- Two-column grid for cards
- Desktop navigation appears
- Font sizes at 95% of desktop
- Hero sections: 90vh minimum height

**Desktop (> 1024px):**
- Multi-column layouts (up to 3 columns)
- Full navigation with hover effects
- Maximum font sizes
- Hero sections: 100vh minimum height
- Parallax effects fully active

### Image Optimization

- **Mobile:** Serve smaller images (max 800px wide)
- **Desktop:** Full resolution (max 1920px wide)
- **Format:** WebP with JPEG/PNG fallbacks
- **Lazy Loading:** All images below the fold

---

## 8. Content Guidelines

### Writing Style

- **Tone:** Confident, visionary, grounded in science
- **Voice:** First person plural ("we"), inclusive
- **Sentence Length:** Mix of short (impact) and long (explanation)
- **Paragraph Length:** 3-5 sentences maximum
- **Technical Terms:** Explain on first use

### Heading Best Practices

- **Action-Oriented:** Use verbs where possible
- **Clear & Descriptive:** Tell users what to expect
- **Hierarchy:** Only one H1 per page, logical H2-H6 progression
- **Length:** Keep under 60 characters for H1, 40 for H2-H3

### Link Text

- **Descriptive:** "Learn about our science" not "Click here"
- **Action Words:** "Explore", "Discover", "Begin", "Join"
- **Context:** User should know destination from text alone

---

## 9. Brand Voice & Messaging

### Core Messaging Pillars

1. **Neurodivergent-First:** Accessibility isn't an add-on, it's foundational
2. **Scientifically Grounded:** Every claim backed by research and results
3. **Ethically Bold:** Pushing boundaries with responsibility
4. **Transformatively Real:** Actual results, not promises

### Tone Attributes

- **Confident** but not arrogant
- **Visionary** but grounded
- **Technical** but accessible
- **Bold** but ethical
- **Inclusive** but specific

### Avoid

- Overusing jargon without explanation
- Making unsupported health claims
- Creating false urgency or pressure
- Excluding non-neurodivergent audiences
- Medical advice (we're information, not prescription)

---

## 10. Code Implementation Standards

### CSS Class Naming

Follow **BEM methodology** for custom classes:
```
.block__element--modifier
```

Example:
```css
.card__title--highlighted
.nav__link--active
.hero__background--parallax
```

### Tailwind CSS Usage

- Use Tailwind utility classes for most styling
- Custom CSS only when Tailwind insufficient
- Keep custom CSS in `/css/style.css`
- Document custom classes in this file

### JavaScript Conventions

- Use modern ES6+ syntax
- No jQuery dependencies (uses vanilla JS + GSAP)
- Wrap GSAP code in availability check:
```javascript
if (typeof gsap !== 'undefined') {
    // GSAP code here
}
```
- Always respect `prefers-reduced-motion`

### PHP Code Standards

- PSR-12 coding standard
- Use prepared statements for all database queries
- Sanitize all user input
- Escape all output
- Use descriptive variable names

### File Organization

```
/css/style.css          → Custom CSS overrides
/js/animations.js       → GSAP animations
/includes/header.php    → Site header template
/includes/footer.php    → Site footer template
/includes/page-template.php → Dynamic page renderer
/pages/*.php            → Individual page files
/admin/                 → Admin backend
/models/                → Database models
/config/                → Configuration files
```

---

## 11. Admin Backend Design

The admin interface follows the same design principles but with a darker, utility-focused aesthetic.

### Admin Color Scheme

```css
Background: #111827 (gray-900)
Cards: #1f2937 (gray-800)
Borders: #374151 (gray-700)
Text Primary: #ffffff
Text Secondary: #9ca3af (gray-400)
Accent: #3b82f6 (blue-500)
```

### Admin Typography

- Same Inter font family
- Slightly smaller base size (0.875rem)
- Dense information display
- Clear hierarchy for data tables

### Admin Components

- **Data Tables:** Sortable, filterable, responsive
- **Forms:** Large input fields, clear labels
- **Dashboard Cards:** Stats display with icons
- **Navigation:** Persistent sidebar or top bar

---

## 12. Performance Standards

### Target Metrics

- **Largest Contentful Paint (LCP):** < 2.5s
- **First Input Delay (FID):** < 100ms
- **Cumulative Layout Shift (CLS):** < 0.1
- **Page Load:** < 3s on 3G connection

### Optimization Techniques

1. **CSS:** Minify and combine
2. **JavaScript:** Defer non-critical scripts
3. **Images:** WebP with fallbacks, lazy loading
4. **Fonts:** Preload Inter font files
5. **CDN:** Use for Tailwind, GSAP, fonts
6. **Database:** Indexed queries, connection pooling
7. **Caching:** Browser caching for static assets

---

## 13. Future Design Considerations

### Planned Enhancements

- **Dark/Light Mode Toggle:** User preference for theme
- **Interactive Timeline:** For Vision page roadmap
- **3D Elements:** Subtle 3D transforms on cards
- **Micro-interactions:** Button press animations, success states
- **Custom Cursors:** For desktop, branded cursor designs

### Scalability

- Design system supports adding new page colors
- Component library can be extended
- Animation system accommodates new effects
- Maintains consistency as site grows

---

## Conclusion

This design bible serves as the source of truth for all design decisions on the ForeverBox Initiative website. When in doubt, refer to these standards. When extending or modifying, maintain consistency with these principles.

**Remember:** Every design choice should serve both aesthetics and accessibility. Beautiful design that excludes users is not good design.

---

**Version:** 1.0  
**Last Updated:** October 2025  
**Maintained By:** ForeverBox Initiative Development Team
