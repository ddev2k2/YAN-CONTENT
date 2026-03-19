/**
 * Yani Content Home - Main JavaScript
 */

(function() {
    'use strict';

    // Initialize theme
    document.addEventListener('DOMContentLoaded', function() {
        initializeTheme();
    });

    /**
     * Initialize theme
     */
    function initializeTheme() {
        setupEventListeners();
        setupScrollAnimations();
    }

    /**
     * Setup event listeners
     */
    function setupEventListeners() {
        // Button click handlers
        const buttons = document.querySelectorAll('.btn');
        buttons.forEach(function(button) {
            button.addEventListener('click', handleButtonClick);
        });

        // Link handlers
        const links = document.querySelectorAll('a[href^="#"]');
        links.forEach(function(link) {
            link.addEventListener('click', handleSmoothScroll);
        });
    }

    /**
     * Handle button click
     */
    function handleButtonClick(e) {
        const button = e.target;
        const text = button.textContent;

        // Add click animation
        button.style.transform = 'scale(0.95)';
        setTimeout(function() {
            button.style.transform = '';
        }, 100);

        // Log button click (for analytics)
        console.log('Button clicked:', text);
    }

    /**
     * Handle smooth scroll
     */
    function handleSmoothScroll(e) {
        const href = this.getAttribute('href');
        if (href.startsWith('#')) {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    }

    /**
     * Setup scroll animations
     */
    function setupScrollAnimations() {
        // Intersection Observer for scroll animations
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        });

        // Observe all animated elements
        const animatedElements = document.querySelectorAll(
            '.partner-card, .problem-card, .service-item, .process-step, .standard-card, .blog-card'
        );
        animatedElements.forEach(function(element) {
            observer.observe(element);
        });
    }

    /**
     * Utility: Get theme asset URL
     */
    window.yaniGetAssetUrl = function(asset) {
        return yaniData.themeUri + '/assets/' + asset;
    };

    /**
     * Utility: Log message
     */
    window.yaniLog = function(message) {
        console.log('[Yani Theme]', message);
    };

})();
