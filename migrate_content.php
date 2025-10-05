<?php
/**
 * Content Migration Script
 * Migrates existing page content to database
 */

require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/models/Page.php';
require_once __DIR__ . '/models/ContentSection.php';

$database = new Database();
$db = $database->getConnection();

if (!$db) {
    die('Database connection failed');
}

$sectionModel = new ContentSection($db);

echo "Starting content migration...\n\n";

// Origin Page Content (page_id = 1 based on schema)
$originSections = [
    [
        'page_id' => 1,
        'section_type' => 'hero',
        'heading' => 'Origin',
        'subheading' => 'From Snowdonia to a Global Vision',
        'body' => null,
        'metadata' => null,
        'image_url' => null,
        'css_classes' => null,
        'animation_class' => 'fade-in',
        'section_order' => 1
    ],
    [
        'page_id' => 1,
        'section_type' => 'text',
        'heading' => 'Breaking Twelve Years of Silence',
        'subheading' => null,
        'body' => '<p class="fade-in">For twelve years, I have worked in absolute secrecy. Not because I feared ridicule, though that would have been inevitable. Not because I doubted the science, though the path was strewn with failures that would have broken lesser resolve. I remained silent because I refused to offer the world empty promises, theoretical frameworks, or laboratory curiosities that would never translate to human benefit.</p>
<p class="fade-in">I remained silent until I had proof.</p>
<p class="fade-in">Today, I break that silence. The ForeverBox Initiative has spent over a decade combining quantum computational biology, AI-guided cellular reprogramming, and precision biomanufacturing to achieve what humanity has dreamed of since the first story was told around the first fire: the ability to rewrite our own biology, to transcend the limitations nature imposed upon us, and to claim authorship over our own physical existence.</p>
<p class="fade-in">We have moved beyond theory. We have case studies, longitudinal data, and participants whose lives have been fundamentally transformed. And now, we are ready to bring these solutions to the world.</p>',
        'metadata' => null,
        'image_url' => null,
        'css_classes' => 'py-32 bg-black',
        'animation_class' => null,
        'section_order' => 2
    ],
    [
        'page_id' => 1,
        'section_type' => 'text',
        'heading' => 'The Diagnosis: Cardiff, Age 26',
        'subheading' => null,
        'body' => '<p class="fade-in">My journey began not in a laboratory but in a cramped neurologist\'s office in Cardiff when I was twenty-six years old. I had spent my entire life feeling like an alien in human skin, my mind processing the world through frequencies others couldn\'t hear, patterns others couldn\'t see, connections that seemed obvious to me but invisible to neurotypical peers.</p>
<p class="fade-in">I excelled academically through sheer force of will, compensating for executive function challenges with hyperfocus, masking social confusion with studied mimicry, and internalising the message that something about me was fundamentally broken.</p>
<p class="fade-in">The diagnosis, when it came, was relief and rage in equal measure: ADHD, combined type, with autistic traits and dyslexic processing patterns. The neurologist offered me stimulant medication and cognitive behavioural therapy, treatments designed to make me function more like everyone else, to file down my edges until I fit more comfortably into neurotypical spaces.</p>
<div class="bg-origin-secondary/10 rounded-xl p-8 border-l-4 border-origin-secondary fade-in my-12">
    <p class="text-xl italic mb-4">"But sitting in that office, waiting for medication that would make me \'normal,\' I experienced a profound cognitive shift: What if I wasn\'t broken?"</p>
</div>
<p class="fade-in">What if my neurodivergence wasn\'t a disorder but a different operating system, not a bug in human evolution but a feature, a beta test of capabilities that the species hadn\'t yet learned to value?</p>',
        'metadata' => null,
        'image_url' => null,
        'css_classes' => 'py-32 bg-gradient-to-b from-black to-origin-primary/10',
        'animation_class' => null,
        'section_order' => 3
    ]
];

foreach ($originSections as $section) {
    $id = $sectionModel->create($section);
    if ($id) {
        echo "Created section ID: {$id} - {$section['heading']}\n";
    } else {
        echo "Failed to create section: {$section['heading']}\n";
    }
}

echo "\n Migration completed!\n";
