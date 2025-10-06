<?php
/**
 * Content Renderer Helper
 * Dynamically renders content sections based on type
 */

class ContentRenderer {
    
    /**
     * Render a content section based on its type
     */
    public static function renderSection($section) {
        $method = 'render' . str_replace(' ', '', ucwords(str_replace('_', ' ', $section['section_type'])));
        
        if (method_exists(self::class, $method)) {
            return self::$method($section);
        }
        
        // Default text rendering
        return self::renderText($section);
    }
    
    /**
     * Render hero section
     */
    private static function renderHero($section) {
        $heading = htmlspecialchars($section['heading']);
        $subheading = htmlspecialchars($section['subheading']);
        $animClass = $section['animation_class'] ?: 'fade-in';
        $cssClasses = $section['css_classes'] ?: '';
        
        return <<<HTML
<section class="relative h-screen flex items-center justify-center overflow-hidden hero-section {$cssClasses}">
    <div class="absolute inset-0 bg-gradient-to-br hero-bg"></div>
    <div class="relative z-10 container mx-auto px-6 text-center">
        <h1 class="text-6xl md:text-8xl font-bold mb-6 {$animClass}">{$heading}</h1>
        <p class="text-2xl md:text-3xl text-gray-200 mb-4 {$animClass}">{$subheading}</p>
        <div class="w-24 h-1 bg-white mx-auto mt-8 {$animClass}"></div>
    </div>
</section>
HTML;
    }
    
    /**
     * Render text section
     */
    private static function renderText($section) {
        $heading = $section['heading'] ? '<h2 class="text-4xl md:text-5xl font-bold mb-12 slide-left">' . htmlspecialchars($section['heading']) . '</h2>' : '';
        $body = $section['body'];
        $cssClasses = $section['css_classes'] ?: 'py-32 bg-black';
        
        return <<<HTML
<section class="{$cssClasses}">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            {$heading}
            <div class="space-y-8 text-lg leading-relaxed text-gray-300">
                {$body}
            </div>
        </div>
    </div>
</section>
HTML;
    }
    
    /**
     * Render quote/callout section
     */
    private static function renderQuote($section) {
        $body = $section['body'];
        $cssClasses = $section['css_classes'] ?: 'bg-origin-secondary/10 rounded-xl p-8 border-l-4 border-origin-secondary fade-in my-12';
        
        return <<<HTML
<div class="{$cssClasses}">
    <p class="text-xl italic">
        {$body}
    </p>
</div>
HTML;
    }
    
    /**
     * Render card grid section
     */
    private static function renderCards($section) {
        $heading = $section['heading'] ? '<h2 class="text-4xl md:text-5xl font-bold text-center mb-16">' . htmlspecialchars($section['heading']) . '</h2>' : '';
        $metadata = json_decode($section['metadata'], true);
        $cards = $metadata['cards'] ?? [];
        
        $cardHtml = '';
        foreach ($cards as $card) {
            $title = htmlspecialchars($card['title']);
            $description = htmlspecialchars($card['description']);
            $color = $card['color'] ?? 'origin';
            
            $cardHtml .= <<<HTML
<a href="{$card['link']}" class="group block card-hover">
    <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-{$color}-primary to-{$color}-secondary p-8 h-80 flex flex-col justify-end transform transition-all duration-500 hover:scale-105">
        <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-all"></div>
        <div class="relative z-10">
            <h3 class="text-3xl font-bold mb-3">{$title}</h3>
            <p class="text-gray-200">{$description}</p>
        </div>
        <div class="absolute top-8 right-8 w-16 h-16 rounded-full bg-white/10 backdrop-blur-sm"></div>
    </div>
</a>
HTML;
        }
        
        $cssClasses = $section['css_classes'] ?: 'py-32 bg-black';
        
        return <<<HTML
<section class="{$cssClasses}">
    <div class="container mx-auto px-6">
        {$heading}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {$cardHtml}
        </div>
    </div>
</section>
HTML;
    }
    
    /**
     * Render statistics section
     */
    private static function renderStats($section) {
        $metadata = json_decode($section['metadata'], true);
        $stats = $metadata['stats'] ?? [];
        
        $statsHtml = '';
        foreach ($stats as $stat) {
            $value = htmlspecialchars($stat['value']);
            $label = htmlspecialchars($stat['label']);
            
            $statsHtml .= <<<HTML
<div class="text-center fade-in">
    <div class="text-5xl md:text-6xl font-bold mb-2 counter" data-target="{$value}">{$value}</div>
    <div class="text-lg text-gray-400">{$label}</div>
</div>
HTML;
        }
        
        $cssClasses = $section['css_classes'] ?: 'py-32 bg-gradient-to-b from-black to-gray-900';
        
        return <<<HTML
<section class="{$cssClasses}">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-5xl mx-auto">
            {$statsHtml}
        </div>
    </div>
</section>
HTML;
    }
    
    /**
     * Render timeline section
     */
    private static function renderTimeline($section) {
        $heading = $section['heading'] ? '<h2 class="text-4xl md:text-5xl font-bold mb-16 text-center">' . htmlspecialchars($section['heading']) . '</h2>' : '';
        $metadata = json_decode($section['metadata'], true);
        $items = $metadata['items'] ?? [];
        
        $timelineHtml = '';
        foreach ($items as $item) {
            $year = htmlspecialchars($item['year']);
            $title = htmlspecialchars($item['title']);
            $description = htmlspecialchars($item['description']);
            
            $timelineHtml .= <<<HTML
<div class="fade-in flex gap-8 mb-12">
    <div class="flex-shrink-0 w-24 text-right">
        <span class="text-2xl font-bold text-primary">{$year}</span>
    </div>
    <div class="flex-grow border-l-2 border-white/20 pl-8 pb-12">
        <h3 class="text-2xl font-bold mb-3">{$title}</h3>
        <p class="text-gray-300 leading-relaxed">{$description}</p>
    </div>
</div>
HTML;
        }
        
        $cssClasses = $section['css_classes'] ?: 'py-32 bg-black';
        
        return <<<HTML
<section class="{$cssClasses}">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            {$heading}
            <div class="mt-16">
                {$timelineHtml}
            </div>
        </div>
    </div>
</section>
HTML;
    }
}
