// Champions Mindset Blueprint - Custom JavaScript

document.addEventListener('DOMContentLoaded', function() {
    
    // FAQ Toggle Functionality
    window.toggleFAQ = function(index) {
        const content = document.getElementById('faq-content-' + index);
        const icon = document.getElementById('faq-icon-' + index);
        
        if (content && icon) {
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
                icon.classList.add('text-blue-600');
                icon.classList.remove('text-gray-400');
            } else {
                content.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
                icon.classList.remove('text-blue-600');
                icon.classList.add('text-gray-400');
            }
        }
    };

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const headerHeight = document.querySelector('header').offsetHeight;
                const targetPosition = target.offsetTop - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Add animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe elements for animation
    document.querySelectorAll('section').forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(20px)';
        section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(section);
    });

    // Form validation and enhancement
    const forms = document.querySelectorAll('.wpcf7-form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            // Add loading state to submit button
            const submitBtn = form.querySelector('input[type="submit"]');
            if (submitBtn) {
                submitBtn.value = 'Registering...';
                submitBtn.disabled = true;
            }
        });
    });

    // Contact Form 7 success handling
    document.addEventListener('wpcf7mailsent', function(event) {
        // Show success modal or custom message
        showSuccessModal();
    }, false);

    // Contact Form 7 error handling
    document.addEventListener('wpcf7invalid', function(event) {
        // Re-enable submit button
        const submitBtn = event.target.querySelector('input[type="submit"]');
        if (submitBtn) {
            submitBtn.value = '🚀 Reserve My Free Spot Now';
            submitBtn.disabled = false;
        }
    }, false);

    // Success Modal Function
    function showSuccessModal() {
        // Create modal HTML
        const modalHTML = `
            <div id="success-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50 modal-backdrop">
                <div class="bg-white rounded-2xl p-8 max-w-md w-full mx-4 relative transform transition-all duration-300 scale-95 opacity-0">
                    <button onclick="closeSuccessModal()" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                    <div class="text-center">
                        <svg class="w-16 h-16 text-green-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Registration Successful! 🎉</h3>
                        <p class="text-gray-600 mb-6">
                            Thank you for registering! You'll receive confirmation and access details on WhatsApp and email shortly.
                        </p>
                        <button onclick="closeSuccessModal()" class="bg-gradient-to-r from-green-500 to-green-600 text-white px-6 py-3 rounded-xl font-semibold hover:from-green-600 hover:to-green-700 transition-all duration-300">
                            Awesome! 👍
                        </button>
                    </div>
                </div>
            </div>
        `;

        // Add modal to page
        document.body.insertAdjacentHTML('beforeend', modalHTML);
        
        // Animate modal in
        setTimeout(() => {
            const modal = document.getElementById('success-modal');
            const modalContent = modal.querySelector('.bg-white');
            if (modal && modalContent) {
                modalContent.classList.remove('scale-95', 'opacity-0');
                modalContent.classList.add('scale-100', 'opacity-100');
            }
        }, 10);
    }

    // Close Success Modal Function
    window.closeSuccessModal = function() {
        const modal = document.getElementById('success-modal');
        if (modal) {
            const modalContent = modal.querySelector('.bg-white');
            modalContent.classList.add('scale-95', 'opacity-0');
            modalContent.classList.remove('scale-100', 'opacity-100');
            
            setTimeout(() => {
                modal.remove();
            }, 300);
        }
    };

    // Countdown timer (optional feature)
    function startCountdown() {
        const countdownElement = document.getElementById('countdown-timer');
        if (!countdownElement) return;

        const eventDate = new Date('2025-06-22T17:00:00+05:30'); // IST timezone
        
        function updateCountdown() {
            const now = new Date().getTime();
            const distance = eventDate.getTime() - now;
            
            if (distance < 0) {
                countdownElement.innerHTML = "Event has started!";
                return;
            }
            
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            countdownElement.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
        }
        
        updateCountdown();
        setInterval(updateCountdown, 1000);
    }

    // Initialize countdown if element exists
    startCountdown();

    // Lazy loading for images (if needed)
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }

    // Performance optimization: Preload critical resources
    function preloadCriticalResources() {
        // Preload fonts if using custom fonts
        const fontLinks = [
            // Add your font URLs here if using custom fonts
        ];
        
        fontLinks.forEach(fontUrl => {
            const link = document.createElement('link');
            link.rel = 'preload';
            link.href = fontUrl;
            link.as = 'font';
            link.type = 'font/woff2';
            link.crossOrigin = 'anonymous';
            document.head.appendChild(link);
        });
    }

    preloadCriticalResources();

    // Analytics tracking (add your tracking code here)
    function trackEvent(eventName, eventData = {}) {
        // Google Analytics 4
        if (typeof gtag !== 'undefined') {
            gtag('event', eventName, eventData);
        }
        
        // Facebook Pixel
        if (typeof fbq !== 'undefined') {
            fbq('track', eventName, eventData);
        }
        
        // Add other analytics platforms as needed
    }

    // Track form submissions
    document.addEventListener('wpcf7mailsent', function(event) {
        trackEvent('form_submit', {
            form_name: 'registration_form',
            event_category: 'engagement'
        });
    });

    // Track CTA clicks
    document.querySelectorAll('a[href="#register"]').forEach(cta => {
        cta.addEventListener('click', function() {
            trackEvent('cta_click', {
                cta_text: this.textContent.trim(),
                event_category: 'engagement'
            });
        });
    });

    console.log('Champions Mindset Blueprint - Theme loaded successfully! 🚀');
});