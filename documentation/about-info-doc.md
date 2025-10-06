# About Page - Information Documentation

## Overview
The About page provides contact information, team details, and ways to connect with The ForeverBox Initiative.

---

## For End Users

### What This Page Is About
The About page is your connection point:

- **About ForeverBox**: Mission and values summary
- **Dr. Zeon7**: Lead researcher and Case Study Delta
- **Team**: Key people (when applicable)
- **Contact Information**: Different emails for different inquiries
- **Location**: Based in North Wales (Snowdonia region)
- **Newsletter Signup**: Stay updated on developments
- **Social Media**: Connect on various platforms

### How to Use This Page
- **Find the right contact**: Different emails for different needs
  - Investors: investments@foreverbox.co.uk
  - Clients: support@foreverbox.co.uk
  - Media: hello@foreverbox.co.uk
  - Dr. Zeon7: drzeon7@foreverbox.co.uk
- **Learn about the team**: Who's behind the initiative
- **Sign up for updates**: Newsletter for latest news
- **Connect socially**: Follow on social media

### Key Takeaways
1. ForeverBox is based in North Wales, UK
2. Multiple contact emails for different purposes
3. Dr. Zeon7 is the lead researcher and primary case study
4. Newsletter available for updates
5. Personal connection is valued—emails are monitored

---

## For Developers

### Page Purpose and Role
About page serves as connection hub and credibility builder:
- Provides contact pathways for all stakeholder types
- Humanizes the initiative through team profiles
- Captures leads through newsletter signup
- Builds trust through transparency

### Technical Implementation

**File Location**: `/pages/about.php`

**Database Integration**: 
- Content from `pages` table where `slug = 'about'`
- Team member profiles from `content_sections` or dedicated table
- Consider separate `team` table for structured data

**Color Scheme**:
- Often uses neutral or multi-color scheme
- Or continues the overall site gradient theme
- Should feel welcoming and accessible

**Key Sections**:
1. About ForeverBox summary
2. Dr. Zeon7 profile
3. Team profiles (if applicable)
4. Contact information (emails)
5. Newsletter signup form
6. Location/address information
7. Social media links
8. FAQ section (optional)

### Development Guidelines

**Contact Information Display**:
```html
<div class="contact-grid">
  <div class="contact-item">
    <h3>For Investors</h3>
    <a href="mailto:investments@foreverbox.co.uk">investments@foreverbox.co.uk</a>
  </div>
  <div class="contact-item">
    <h3>For Clients</h3>
    <a href="mailto:support@foreverbox.co.uk">support@foreverbox.co.uk</a>
  </div>
  <div class="contact-item">
    <h3>For Media</h3>
    <a href="mailto:hello@foreverbox.co.uk">hello@foreverbox.co.uk</a>
  </div>
  <div class="contact-item">
    <h3>Dr. Zeon7</h3>
    <a href="mailto:drzeon7@foreverbox.co.uk">drzeon7@foreverbox.co.uk</a>
  </div>
</div>
```

**Newsletter Form**:
- Should capture email address
- Optional: name, interests
- Must include privacy policy agreement
- Integrate with email marketing platform (e.g., Mailchimp)
- Provide immediate confirmation

**Team Profiles**:
- Photo (or avatar)
- Name and title
- Brief bio
- Contact info (if appropriate)
- LinkedIn link (optional)

**Animation Classes**:
- `.fade-in` - Content sections
- `.slide-left` / `.slide-right` - Team profiles
- `.scale-image` - Profile photos

### Code Structure
```php
<?php
// About page uses dynamic template
include __DIR__ . '/../includes/page-template.php';
?>
```

### Common Development Tasks

**Add Team Member**:
```sql
INSERT INTO content_sections (page_id, heading, body, section_order)
VALUES (
  (SELECT id FROM pages WHERE slug = 'about'),
  '[Name] - [Title]',
  '<p>Bio text...</p><p>Email: person@foreverbox.co.uk</p>',
  [order_number]
);
```

**Update Contact Info**:
- Update in content_sections body field
- Ensure all instances are updated
- Test that email links work

**Newsletter Integration**:
```php
// Newsletter form handler
if ($_POST['newsletter_signup']) {
  // Validate email
  // Add to mailing list
  // Send confirmation
}
```

### Testing Checklist
- [ ] All email addresses are correct and working
- [ ] Newsletter signup form submits properly
- [ ] Form validation works (required fields, email format)
- [ ] Confirmation messages display
- [ ] Social media links are correct
- [ ] Team profiles display properly
- [ ] Mobile layout is readable
- [ ] Privacy policy is linked

### Related Files
- `/includes/page-template.php`
- `/includes/footer.php` - Also contains contact info
- Newsletter signup handler (if separate)

---

## Content Strategy

### Tone and Voice
- Warm and welcoming
- Professional but approachable
- Personal without being overly casual
- Transparent and honest

### Critical Information
- **Email addresses**: Must be monitored and responsive
  - investments@foreverbox.co.uk
  - support@foreverbox.co.uk
  - hello@foreverbox.co.uk
  - drzeon7@foreverbox.co.uk
- **Location**: North Wales, UK (Snowdonia region)
- **Privacy**: Respect user data, provide privacy policy

### Target Audiences
1. **All stakeholders**: Everyone needs contact info
2. **Media**: Looking for interviews or information
3. **Potential clients**: Want to reach out with questions
4. **Investors**: Need direct contact for discussions
5. **General public**: Newsletter signups, general inquiries

### Content Maintenance
- Keep team profiles current
- Update contact information immediately if changed
- Monitor and respond to all contact emails
- Update newsletter content regularly
- Prune inactive email addresses from newsletter list

---

## Privacy and Data Protection

### GDPR Compliance
- Clear consent for newsletter signup
- Easy unsubscribe mechanism
- Privacy policy linked and accessible
- Data storage and processing disclosed
- Right to deletion honored

### Security
- Protect email addresses from spam bots (consider obfuscation)
- Use CAPTCHA on newsletter form to prevent spam
- Secure form submissions (HTTPS)
- Don't expose full email database publicly

---

## Future Enhancements

### Potential Additions
- Contact form (in addition to email addresses)
- Live chat support
- FAQ section
- Office photos/virtual tour
- Testimonials
- Press kit download
- Careers/join the team section

### Technical Improvements
- Newsletter automation
- CRM integration for contact inquiries
- Auto-responders for contact emails
- Analytics on most common inquiries

---

**Last Updated**: October 2025
**Page Status**: Production Ready
**Content Source**: Various (contact info from SITEMAP.md)
