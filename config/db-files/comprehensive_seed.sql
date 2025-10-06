-- ForeverBox Initiative - Comprehensive Seed Data
-- This file populates the database with initial content for all pages
-- Run this after running schema.sql

USE foreverbox_initiative;

-- =============================================================================
-- HERO SECTIONS FOR ALL PAGES
-- =============================================================================

INSERT INTO content_sections (page_id, section_type, heading, subheading, css_classes, animation_class, section_order) VALUES
((SELECT id FROM pages WHERE slug = 'origin'), 'hero', 'Origin', 'From Snowdonia to a Global Vision', '', 'fade-in', 0),
((SELECT id FROM pages WHERE slug = 'science'), 'hero', 'Science', 'Quantum Biology Meets Innovation', '', 'fade-in', 0),
((SELECT id FROM pages WHERE slug = 'case-studies'), 'hero', 'Case Studies', 'Real Impact, Real Results', '', 'fade-in', 0),
((SELECT id FROM pages WHERE slug = 'forever-fit'), 'hero', 'Forever Fit', 'Transforming Human Potential', '', 'fade-in', 0),
((SELECT id FROM pages WHERE slug = 'investment'), 'hero', 'Investment', 'Join the Future of Digital Health', '', 'fade-in', 0),
((SELECT id FROM pages WHERE slug = 'vision'), 'hero', 'Vision', 'The Path Forward', '', 'fade-in', 0);

-- =============================================================================
-- ORIGIN PAGE CONTENT
-- =============================================================================

INSERT INTO content_sections (page_id, heading, body, section_order) VALUES
(
  (SELECT id FROM pages WHERE slug = 'origin'),
  'Breaking Twelve Years of Silence',
  '<p>For twelve years, I have worked in absolute secrecy. Not because I feared ridicule, though that would have been inevitable. Not because I doubted the science, though the path was strewn with failures that would have broken lesser resolve. I remained silent because I refused to offer the world empty promises, theoretical frameworks, or laboratory curiosities that would never translate to human benefit.</p><p>I remained silent until I had proof.</p><p>Today, I break that silence. The ForeverBox Initiative has spent over a decade combining quantum computational biology, AI-guided cellular reprogramming, and precision biomanufacturing to achieve something unprecedented: genuine, measurable transformation of the human form.</p>',
  1
),
(
  (SELECT id FROM pages WHERE slug = 'origin'),
  'Snowdonia: 1985–2003',
  '<p>I was born in a small coastal town in North Wales. My earliest memories are not of playgrounds or classrooms, but of tide pools and rock faces, gulls circling overhead and the endless rhythm of waves on stone.</p><p>From the beginning, I was different. Not broken—never broken—but different. The diagnosis would come later: ADHD, autism spectrum, a brain that processed the world in patterns others could not see. While other children played at being pirates or princesses, I cataloged shells by genus, tracked migration patterns of birds, memorized geological epochs.</p><p>The bullying was relentless. The social isolation, absolute. But the Welsh coast became my sanctuary, my first laboratory. I learned to read the language of living systems, to see the deep time written in limestone and shale, to understand adaptation not as metaphor but as mechanism.</p>',
  2
),
(
  (SELECT id FROM pages WHERE slug = 'origin'),
  'The Dark Period: 2012–2018',
  '<p>They do not tell you about the failures. Research papers present clean narratives: hypothesis, methodology, results, conclusion. They omit the years of stalled progress, the abandoned approaches, the experiments that revealed nothing but your own inadequacy.</p><p>Between 2012 and 2018, I failed more times than I can count. Cell lines died. Algorithms collapsed under real-world data. Funding evaporated. Colleagues departed for more promising research. I watched peers publish, ascend, succeed, while I remained mired in problems no one else believed were solvable.</p><p>Depression became my constant companion. There were months I could not leave my flat, could not face the laboratory, could not bear to look at the data. I questioned everything: my competence, my methods, my sanity.</p><p>But I kept returning. Because I had to. Because the question would not let me rest.</p>',
  3
),
(
  (SELECT id FROM pages WHERE slug = 'origin'),
  'The North Wales Breakthrough: 2019',
  '<p>The breakthrough came not in a moment of inspiration, but in months of grinding recalibration. I had been approaching the problem wrong—trying to force linear solutions onto quantum-biological systems, imposing rigid frameworks on fluid processes.</p><p>The insight arrived during a winter storm, watching waves reorganize themselves against the Snowdonia coast. The water did not fight the stone; it found the paths of least resistance, the fracture lines, the vulnerabilities. It adapted, persisted, transformed.</p><p>Within six months, I had the foundation of what would become our quantum-biological convergence model. Within a year, I had proof-of-concept in cellular systems. Within two years, I had begun my own transformation.</p><p>I became Case Study Delta.</p>',
  4
);

-- =============================================================================
-- SCIENCE PAGE CONTENT
-- =============================================================================

INSERT INTO content_sections (page_id, heading, body, section_order) VALUES
(
  (SELECT id FROM pages WHERE slug = 'science'),
  'Quantum-Biological Convergence',
  '<p>The ForeverBox Initiative operates at the intersection of quantum computing and cellular biology—a convergence that enables us to model and manipulate biological systems at unprecedented scales of complexity.</p><p>Traditional biological research operates through reductionism: isolate variables, control conditions, measure outcomes. But living systems are irreducibly complex, adaptive networks where quantum effects propagate through molecular cascades to produce emergent behaviors.</p><p>Our computational architecture integrates quantum simulation, AI-guided optimization, and real-time feedback loops to navigate this complexity. We do not simplify the system; we model it in its full, chaotic richness.</p>',
  1
),
(
  (SELECT id FROM pages WHERE slug = 'science'),
  'Pillar One: Epigenetic Reprogramming',
  '<p>Your DNA does not change. What changes is which genes are expressed, when, and to what degree. This is epigenetics—the software layer atop genetic hardware.</p><p>Our epigenetic reprogramming protocols use targeted interventions to alter gene expression patterns. Through carefully sequenced pharmacological, nutritional, and environmental inputs, we can shift cellular behavior toward desired outcomes: enhanced metabolism, improved stress response, optimized neural function.</p><p>This is not gene editing. It is gene expression modulation—reversible, adaptive, responsive to feedback.</p>',
  2
),
(
  (SELECT id FROM pages WHERE slug = 'science'),
  'Pillar Two: Morphological Reconfiguration',
  '<p>Your body is not a fixed structure. Bone remodels continuously. Muscle adapts to load. Connective tissue reorganizes in response to mechanical stress. Even in adulthood, human morphology is plastic—if you know how to guide it.</p><p>Morphological reconfiguration combines bioengineered scaffolding, growth factor gradients, and mechanical stimulation to reshape bone, cartilage, and soft tissue. The process is slow—measured in months and years—but the outcomes are profound and permanent.</p><p>We are not augmenting the body with external devices. We are guiding the body to augment itself.</p>',
  3
),
(
  (SELECT id FROM pages WHERE slug = 'science'),
  'Pillar Three: Hybrid Augmentation',
  '<p>This is the experimental frontier, offered only to those who understand and accept the risks. Hybrid augmentation integrates biocompatible materials and structures into living tissue, creating functional enhancements that biological systems alone cannot achieve.</p><p>The augmentations are subtle—changes in bone density and structure, subcutaneous modifications, enhanced sensory capabilities. Nothing grotesque, nothing inhuman. But unmistakably altered.</p><p>This is transformation at the edge of what biology allows. It is not for everyone. It may not be for anyone but those willing to become explorers of their own flesh.</p>',
  4
),
(
  (SELECT id FROM pages WHERE slug = 'science'),
  'The Neurodivergence Hypothesis',
  '<p>A pattern emerged early in our research: individuals with ADHD, autism spectrum disorders, and related neurodivergent conditions showed markedly different—and often superior—responses to our interventions.</p><p>We believe this is because neurodivergent brains are already adapted to handle complexity, ambiguity, and rapid change. The cognitive flexibility required to navigate social deficits translates directly to enhanced adaptability in biological transformation.</p><p>You were not broken. You were prepared.</p>',
  5
);

-- =============================================================================
-- CASE STUDIES PAGE CONTENT
-- =============================================================================

INSERT INTO content_sections (page_id, heading, body, section_order) VALUES
(
  (SELECT id FROM pages WHERE slug = 'case-studies'),
  'Case Study Delta: Dr. Zeon7',
  '<p>In 2019, I made the decision to become the primary subject of my own research. This was not hubris or recklessness—it was necessity. I could not ethically offer transformation to others without first proving it on myself.</p><p>I became Case Study Delta.</p><p>Over seven years, I underwent the full protocol: epigenetic reprogramming, morphological reconfiguration, and ultimately hybrid augmentation. The transformation was comprehensive, irreversible, and exactly what I had predicted.</p>',
  1
),
(
  (SELECT id FROM pages WHERE slug = 'case-studies'),
  'Timeline: Seven Years of Transformation',
  '<p><strong>Year 1 (2019-2020):</strong> Epigenetic reprogramming. Metabolic optimization. Initial morphological interventions targeting bone density and connective tissue.</p><p><strong>Year 2-3 (2020-2022):</strong> Intensive morphological work. Skeletal remodeling. Muscle optimization. Neural enhancements.</p><p><strong>Year 4-5 (2022-2024):</strong> Hybrid augmentation phase. Integration of biocompatible structures. Sensory enhancements.</p><p><strong>Year 6-7 (2024-2025):</strong> Stabilization and optimization. Long-term monitoring. Documentation of outcomes.</p>',
  2
),
(
  (SELECT id FROM pages WHERE slug = 'case-studies'),
  'Measured Outcomes',
  '<p><strong>Physical:</strong> 15% increase in bone density. 22% improvement in cardiovascular efficiency. Enhanced joint stability and range of motion.</p><p><strong>Cognitive:</strong> Measurable improvements in executive function, working memory, and pattern recognition. Reduced ADHD symptom severity.</p><p><strong>Morphological:</strong> Subtle but unmistakable structural changes. Enhanced lupine-inspired features as designed. Permanent and stable.</p><p><strong>Psychological:</strong> Profound sense of alignment between internal identity and external form. Reduction in dysphoria and social anxiety.</p>',
  3
),
(
  (SELECT id FROM pages WHERE slug = 'case-studies'),
  'Ethical Transparency',
  '<p>Case Study Delta is me. I am the proof. I carry the risks, the unknowns, the irreversible changes. This is disclosed fully to every potential client.</p><p>Transformation is not magic. It is slow, demanding, and permanent. It requires commitment, resources, and a willingness to accept outcomes that cannot be predicted with certainty.</p><p>I offer this to others because it worked for me. But I offer it with complete honesty about what it entails.</p>',
  4
);

-- =============================================================================
-- FOREVER FIT PAGE CONTENT
-- =============================================================================

INSERT INTO content_sections (page_id, heading, body, section_order) VALUES
(
  (SELECT id FROM pages WHERE slug = 'forever-fit'),
  'A Digital Gateway to Transformation',
  '<p>Forever Fit is not the clinical intervention. It is the accessible entry point—a neurodivergent-first mobile app that brings evidence-based wellness to anyone, anywhere.</p><p>While our clinical services remain exclusive and resource-intensive, Forever Fit democratizes the foundational principles: optimized exercise, personalized nutrition, and intelligent medication/supplement management.</p>',
  1
),
(
  (SELECT id FROM pages WHERE slug = 'forever-fit'),
  'Three Pillars of Wellness',
  '<p><strong>Exercise:</strong> Adaptive workout plans that account for executive function challenges. Gamification to maintain engagement. Integration with Google Fit and other health platforms.</p><p><strong>Nutrition:</strong> Question-led meal planning that adapts to preferences, restrictions, and goals. No calorie counting unless you want it. Focus on sustainability over perfection.</p><p><strong>Medication & Supplements:</strong> Track prescriptions, supplements, and over-the-counter medications. Interaction warnings powered by pharmaceutical databases. Reminder systems that work with ADHD brains.</p>',
  2
),
(
  (SELECT id FROM pages WHERE slug = 'forever-fit'),
  'Neurodivergent-First Design',
  '<p>Forever Fit was built by neurodivergent people, for neurodivergent people. Every feature considers executive dysfunction, sensory sensitivities, and cognitive differences.</p><p>No overwhelming interfaces. No shame-based motivation. No rigid rules that ignore reality.</p><p>Just intelligent, adaptive support that meets you where you are.</p>',
  3
),
(
  (SELECT id FROM pages WHERE slug = 'forever-fit'),
  'Freemium Pricing',
  '<p><strong>Free Tier:</strong> Basic exercise tracking, meal planning, and medication logs. Always free, no credit card required.</p><p><strong>Premium Tier (£9.99/month):</strong> AI-adaptive coaching that learns your patterns. Advanced analytics. Personalized recommendations. Priority support.</p><p>Start free. Upgrade when ready. Cancel anytime.</p>',
  4
);

-- =============================================================================
-- INVESTMENT PAGE CONTENT
-- =============================================================================

INSERT INTO content_sections (page_id, heading, body, section_order) VALUES
(
  (SELECT id FROM pages WHERE slug = 'investment'),
  'Market Opportunity',
  '<p>The digital health market is projected to reach $660 billion by 2028, with neurodivergent-focused products representing a rapidly growing segment. The longevity and human enhancement market is similarly explosive, driven by aging populations and increasing acceptance of transformation technologies.</p><p>The ForeverBox Initiative sits at the intersection of these markets, offering both accessible digital wellness (Forever Fit) and exclusive clinical interventions.</p>',
  1
),
(
  (SELECT id FROM pages WHERE slug = 'investment'),
  'Dual Revenue Model',
  '<p><strong>B2C: Forever Fit App</strong> - Recurring monthly subscriptions (£9.99/month Premium tier). Scalable, high-margin, rapidly growing user base.</p><p><strong>B2C/B2B: Clinical Services</strong> - High-value transformations for qualified clients. Exclusive, resource-intensive, premium pricing.</p><p><strong>Future: B2B Licensing</strong> - Technology licensing to pharmaceutical and health tech companies. Strategic partnerships with established players.</p>',
  2
),
(
  (SELECT id FROM pages WHERE slug = 'investment'),
  'Use of Funds',
  '<p>Investment funds will be allocated to:</p><ul><li>Forever Fit app development and launch (40%)</li><li>Clinical facilities expansion (30%)</li><li>Research and validation studies (15%)</li><li>Marketing and user acquisition (10%)</li><li>Team expansion (5%)</li></ul>',
  3
),
(
  (SELECT id FROM pages WHERE slug = 'investment'),
  'Investment Terms',
  '<p>We are currently raising a Series A round to fund Forever Fit launch and clinical expansion. Detailed terms are available to accredited investors under NDA.</p><p>Contact investments@foreverbox.co.uk to begin the conversation.</p>',
  4
);

-- =============================================================================
-- VISION PAGE CONTENT
-- =============================================================================

INSERT INTO content_sections (page_id, heading, body, section_order) VALUES
(
  (SELECT id FROM pages WHERE slug = 'vision'),
  'The Path Forward',
  '<p>The ForeverBox Initiative is not just a company—it is a movement toward a future where transformation is accessible, ethical, and grounded in science.</p><p>Our vision spans a decade, with clear phases of development and expansion.</p>',
  1
),
(
  (SELECT id FROM pages WHERE slug = 'vision'),
  'Phase 1: Foundation (2025-2026)',
  '<ul><li>Forever Fit app launch and initial user acquisition</li><li>Establish clinical services in North Wales</li><li>Publish initial research findings</li><li>Build scientific and medical advisory board</li><li>Secure regulatory approvals for key markets</li></ul>',
  2
),
(
  (SELECT id FROM pages WHERE slug = 'vision'),
  'Phase 2: Expansion (2027-2028)',
  '<ul><li>Scale Forever Fit to 100,000+ users</li><li>Open additional clinical facilities (UK and EU)</li><li>Launch B2B licensing partnerships</li><li>Expand research programs</li><li>Achieve profitability</li></ul>',
  3
),
(
  (SELECT id FROM pages WHERE slug = 'vision'),
  'Phase 3: Global Impact (2029+)',
  '<ul><li>Forever Fit available worldwide</li><li>Multiple clinical facilities globally</li><li>Established as leader in transformation science</li><li>Ongoing research into advanced interventions</li><li>Advocacy for regulatory frameworks supporting transformation</li></ul>',
  4
),
(
  (SELECT id FROM pages WHERE slug = 'vision'),
  'Ethical Commitments',
  '<p>As we grow, we commit to:</p><ul><li>Maintaining accessibility through Forever Fit free tier</li><li>Transparent communication about risks and limitations</li><li>Rigorous safety protocols for all interventions</li><li>Respect for autonomy and informed consent</li><li>Advocacy for neurodivergent rights and recognition</li></ul>',
  5
);

-- =============================================================================
-- ADDITIONAL SETTINGS
-- =============================================================================

INSERT INTO settings (setting_key, setting_value) VALUES
('contact_email_general', 'hello@foreverbox.co.uk'),
('contact_email_investors', 'investments@foreverbox.co.uk'),
('contact_email_clients', 'support@foreverbox.co.uk'),
('contact_email_drzeon7', 'drzeon7@foreverbox.co.uk'),
('location', 'North Wales, United Kingdom'),
('forever_fit_pricing_free', 'Free - Basic features, always free'),
('forever_fit_pricing_premium', '£9.99/month - AI coaching, advanced analytics, priority support')
ON DUPLICATE KEY UPDATE setting_value = VALUES(setting_value);

-- =============================================================================
-- SEED DATA COMPLETE
-- =============================================================================
