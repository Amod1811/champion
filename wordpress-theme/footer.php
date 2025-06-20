<footer class="bg-gradient-to-br from-gray-900 to-black text-white py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                🚀 Ready to Upgrade Your Mindset?
            </h2>
            <p class="text-2xl text-gray-300 mb-12">
                Stop procrastinating. Start becoming a Champion.
            </p>
            
            <div class="bg-gradient-to-r from-orange-500 to-red-500 rounded-3xl p-12 mb-12">
                <a href="#register" class="bg-white text-gray-900 px-8 py-4 rounded-full text-xl font-bold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-2xl flex items-center space-x-3 mx-auto w-fit">
                    <span>🔓 Register Now for FREE</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <div class="flex items-center justify-center space-x-2 mt-6 text-orange-100">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-lg font-semibold">🎟 Limited Free Seats Available – Don't Miss Out!</span>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8">
                <div class="flex items-center justify-center space-x-2 mb-4">
                    <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-lg">CM</span>
                    </div>
                    <div class="text-left">
                        <h3 class="text-xl font-bold">Champions Mindset Blueprint</h3>
                        <p class="text-gray-400 text-sm">Transform Your Life. Eliminate Procrastination.</p>
                    </div>
                </div>
                <p class="text-gray-500 text-sm">
                    © <?php echo date('Y'); ?> Champions Mindset Blueprint. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // FAQ Toggle Functionality
        function toggleFAQ(index) {
            const content = document.getElementById('faq-content-' + index);
            const icon = document.getElementById('faq-icon-' + index);
            
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

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
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
    </script>

    <?php wp_footer(); ?>
</body>
</html>