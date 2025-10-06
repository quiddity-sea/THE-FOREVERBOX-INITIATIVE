# Forever Fit Page - Information Documentation

## Overview
The Forever Fit page presents the digital health platform—a neurodivergent-first mobile app that makes wellness transformation accessible to everyone.

---

## For End Users

### What This Page Is About
Forever Fit is the public-facing digital gateway to transformation:

- **Three Pillars**: Exercise, Nutrition, Medication/Supplements
- **Freemium Model**: Free basic features, £9.99/month Premium tier
- **Neurodivergent-First Design**: Built for ADHD, autism, and executive function challenges
- **AI-Adaptive Coaching**: Premium feature that learns from your patterns
- **Google Fit Integration**: Seamless data sync with existing health apps

### How to Use This Page
- **Understand the pricing**: Free tier vs Premium (£9.99/month)
- **Explore the features**: See what's included in each tier
- **Learn about neurodivergent-first design**: How the app supports executive function
- **View screenshots/mockups**: Visual preview of app interface
- **Download or sign up**: Clear call-to-action buttons

### Key Takeaways
1. Free tier provides essential wellness tracking
2. Premium tier adds AI coaching and advanced features
3. Designed specifically for neurodivergent users
4. Gamification helps maintain engagement and motivation
5. Not a medical device—it's a wellness and lifestyle app
6. Acts as gateway to clinical services for eligible users

---

## For Developers

### Page Purpose and Role
Forever Fit page serves as product marketing and conversion:
- Showcases the accessible entry point to ForeverBox ecosystem
- Converts visitors to app users
- Clearly differentiates free vs paid features
- Emphasizes unique value proposition (neurodivergent-first)

### Technical Implementation

**File Location**: `/pages/forever-fit.php`

**Database Integration**: 
- Content from `pages` table where `slug = 'forever-fit'`
- Feature lists and pricing from `content_sections`
- Consider dedicated tables for features and pricing tiers

**Color Scheme**:
- Primary: `#f57f17` (amber)
- Secondary: `#fbc02d` (lighter amber/yellow)
- Tailwind classes: `from-fit-primary`, `via-fit-secondary`

**Key Sections**:
1. Hero section with app mockup imagery
2. Three Pillars overview
3. Feature comparison table (Free vs Premium)
4. Neurodivergent-first design explanation
5. App screenshots/mockups
6. Pricing cards (Free / £9.99 Premium)
7. Download/Sign-up CTAs
8. Link to clinical services for eligible users

### Development Guidelines

**Content Structure**:
- Feature comparison should be tabular or side-by-side cards
- Pricing must be clear and prominent
- App mockups should be high-quality images
- CTAs should be obvious and repeated

**Animation Classes**:
- `.fade-in` - Text content
- `.slide-left` - Feature cards
- `.scale-image` - Phone mockups
- `.stagger-list` - Feature lists

**Pricing Display**:
```html
<div class="pricing-card">
  <h3>Free Tier</h3>
  <p class="price">£0/month</p>
  <ul class="features">...</ul>
</div>
<div class="pricing-card premium">
  <h3>Premium</h3>
  <p class="price">£9.99/month</p>
  <ul class="features">...</ul>
</div>
```

**Important Distinctions**:
- Forever Fit is the **app**, not the clinical intervention
- Clearly separate from Case Studies clinical work
- Emphasize accessibility and affordability
- Note that it's a wellness tool, not medical treatment

### Code Structure
```php
<?php
// Forever Fit page uses dynamic template
include __DIR__ . '/../includes/page-template.php';
?>
```

### Common Development Tasks

**Update Pricing**:
```sql
UPDATE content_sections 
SET body = 'Updated pricing information'
WHERE page_id = (SELECT id FROM pages WHERE slug = 'forever-fit')
  AND heading LIKE '%Pricing%';
```

**Add Feature**:
```sql
-- Add to feature list in content_sections body
-- Or use dedicated features table
INSERT INTO app_features (tier, feature_name, description)
VALUES ('premium', 'New Feature', 'Description...');
```

**Update App Mockups**:
- Place images in `/images/forever-fit/`
- Update image references in content_sections
- Optimize for web (WebP with fallbacks)
- Include alt text for accessibility

### Testing Checklist
- [ ] Pricing is accurate and clear
- [ ] Free vs Premium features are distinct
- [ ] App mockups display properly
- [ ] CTAs are functional and visible
- [ ] Mobile responsive (especially for phone mockups)
- [ ] No confusion with clinical services
- [ ] Links to app store (when available)

### Related Files
- `/includes/page-template.php`
- `/css/style.css` - Pricing card styles
- App mockup images in `/images/`

---

## Content Strategy

### Tone and Voice
- Accessible and friendly
- Enthusiastic but not overselling
- Empowering for neurodivergent users
- Clear about limitations (wellness, not medical)

### Critical Messaging
- **This is the app, not the clinical service**
- Emphasize affordability (£9.99/month is accessible)
- Highlight neurodivergent-first design as unique value
- Question-led onboarding, not clinical assessment
- Gateway to clinical services for eligible users

### Target Audiences
1. **Neurodivergent individuals**: Primary target user
2. **Health-conscious consumers**: Secondary market
3. **People seeking affordable wellness tools**: Price-sensitive
4. **Potential clinical clients**: App as entry point

### Content Maintenance
- Keep pricing current
- Update features as app develops
- Add testimonials/reviews when available
- Update screenshots with each major app version
- Maintain clarity on free vs premium distinction

---

## Future Enhancements

### Potential Additions
- Video demo of app interface
- User testimonials/reviews
- Direct app download buttons
- Free trial of Premium features
- Integration showcase (Google Fit, etc.)
- Success metrics from users

### Technical Improvements
- Interactive app demo/simulator
- Live pricing based on region
- Referral program integration
- In-page sign-up form

---

**Last Updated**: October 2025
**Page Status**: Production Ready
**Content Source**: `documentation/context/forever-fit.md`
