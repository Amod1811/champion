<?php get_header(); ?>

<main id="main" class="min-h-screen">
    <!-- Hero Section -->
    <section class="relative overflow-hidden gradient-bg-1">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <!-- Urgency Badge -->
                <div class="inline-flex items-center space-x-2 bg-orange-500 text-white px-4 py-2 rounded-full text-sm font-semibold mb-6 animate-pulse">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    <span><?php echo get_theme_mod('urgency_text', 'Limited Free Slots Available'); ?></span>
                </div>
                
                <!-- Main Headline -->
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight">
                    <?php echo get_theme_mod('main_title', 'Champions Mindset'); ?>
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-yellow-400">
                        <?php echo get_theme_mod('main_subtitle', 'Blueprint Masterclass'); ?>
                    </span>
                </h1>
                
                <!-- Subheadline -->
                <h2 class="text-xl md:text-2xl lg:text-3xl text-blue-100 mb-4 font-semibold">
                    <?php echo get_theme_mod('hero_subtitle', '🔥 Eliminate Procrastination & Unlock Peak Performance'); ?>
                </h2>
                
                <p class="text-lg md:text-xl text-blue-200 mb-8 max-w-3xl mx-auto">
                    <?php echo get_theme_mod('hero_description', 'Without Willpower. Without Discipline. Just Science-Backed Mindset Shifts.'); ?>
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
                    <a href="#register" class="gradient-bg-2 text-white px-8 py-4 rounded-full text-lg font-bold btn-hover shadow-2xl flex items-center space-x-2">
                        <span>🚀 Register Now for FREE</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <div class="flex items-center space-x-2 text-blue-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-sm">🎟 Limited Free Slots Available</span>
                    </div>
                </div>
                
                <!-- Target Audience -->
                <div class="inline-block bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-6 text-white max-w-2xl">
                    <div class="flex items-center justify-center space-x-2 mb-3">
                        <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                        </svg>
                        <h3 class="text-xl font-bold">🧠 Designed for Students Who Are Ready to Elevate Their Life</h3>
                    </div>
                    <div class="grid md:grid-cols-2 gap-3 text-sm">
                        <p>• Struggling to start? Always falling back into old habits?</p>
                        <p>• Tired of feeling stuck, distracted, or inconsistent?</p>
                    </div>
                    <p class="mt-4 text-blue-200 font-semibold">
                        This masterclass gives you the blueprint to take action—consistently and confidently.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Benefits Grid -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12">
                    Transform Your Life Starting Today
                </h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <?php
                    $benefits = array(
                        array(
                            'icon' => '<svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
                            'title' => 'No more time wasted',
                            'description' => 'Stop the endless cycle of procrastination'
                        ),
                        array(
                            'icon' => '<svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>',
                            'title' => 'No more unfinished tasks',
                            'description' => 'Complete what you start with confidence'
                        ),
                        array(
                            'icon' => '<svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>',
                            'title' => 'No more relying on motivation',
                            'description' => 'Build systems that work without willpower'
                        )
                    );
                    
                    foreach($benefits as $benefit): ?>
                        <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <div class="flex flex-col items-center text-center">
                                <?php echo $benefit['icon']; ?>
                                <h3 class="text-xl font-bold text-gray-900 mt-4 mb-2">✅ <?php echo $benefit['title']; ?></h3>
                                <p class="text-gray-600"><?php echo $benefit['description']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Why Attend Section -->
            <div class="bg-white rounded-3xl p-12 shadow-xl">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 text-center mb-4">
                    📌 Why You Should Attend
                </h2>
                <p class="text-xl text-gray-600 text-center mb-12">
                    This Masterclass is for students who want to:
                </p>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <?php
                    $whyAttend = array(
                        array(
                            'title' => '🧩 Stay Consistent',
                            'description' => 'No more starting & stopping. Build unstoppable momentum.'
                        ),
                        array(
                            'title' => '🔒 Trust Yourself Again',
                            'description' => 'Keep promises to yourself, and feel proud every day.'
                        ),
                        array(
                            'title' => '🔁 Build Habits That Stick',
                            'description' => 'Small, daily actions that move you closer to success.'
                        ),
                        array(
                            'title' => '🎯 Reach Big Goals',
                            'description' => 'Align your thoughts, feelings, and actions for maximum results.'
                        )
                    );
                    
                    foreach($whyAttend as $item): ?>
                        <div class="flex items-start space-x-4 p-6 bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl hover:from-blue-100 hover:to-purple-100 transition-all duration-300">
                            <div class="flex-shrink-0">
                                <svg class="w-12 h-12 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2"><?php echo $item['title']; ?></h3>
                                <p class="text-gray-700"><?php echo $item['description']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Curriculum Section -->
    <section class="py-20 gradient-bg-1">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    🧬 What You'll Learn in 90 Minutes
                </h2>
                <p class="text-xl text-blue-200 max-w-3xl mx-auto">
                    A complete blueprint to transform your mindset and eliminate procrastination forever
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <?php
                $modules = array(
                    array(
                        'title' => 'Procrastination Destroyer Formula',
                        'description' => 'The neuroscience-based solution that eliminates overthinking and makes action automatic.'
                    ),
                    array(
                        'title' => 'NLP + Brain Science System',
                        'description' => 'My tested framework to take massive action—without needing "discipline" or "motivation hacks."'
                    ),
                    array(
                        'title' => 'The Micro-Wins Momentum Formula™',
                        'description' => 'Forget rigid routines. Learn how small wins create massive drive every single day.'
                    ),
                    array(
                        'title' => 'Instant Action Hack',
                        'description' => 'A simple brain trick to start anything fast—from assignments to career goals.'
                    )
                );
                
                foreach($modules as $module): ?>
                    <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 hover:bg-opacity-20 transition-all duration-300 border border-white border-opacity-20">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 bg-white bg-opacity-20 rounded-full p-3">
                                <svg class="w-12 h-12 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white mb-3">✅ <?php echo $module['title']; ?>:</h3>
                                <p class="text-blue-100 leading-relaxed"><?php echo $module['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Bonus Section -->
            <div class="gradient-bg-2 rounded-2xl p-8 text-center">
                <div class="flex items-center justify-center space-x-3 mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                    </svg>
                    <h3 class="text-2xl font-bold text-white">🎁 BONUS: Worksheets + Action Plan Template</h3>
                </div>
                <p class="text-orange-100 text-lg">
                    Take action immediately with our proven worksheets and step-by-step action plan template
                </p>
            </div>
        </div>
    </section>

    <!-- Event Details Section -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-gray-900 mb-12">📅 Event Details</h2>
            
            <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-3xl p-12 shadow-xl">
                <div class="grid md:grid-cols-2 gap-8 mb-8">
                    <div class="flex items-center space-x-4 justify-center">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <div class="text-left">
                            <p class="text-sm text-gray-600 font-semibold">DATE</p>
                            <p class="text-xl font-bold text-gray-900">🗓 <?php echo get_theme_mod('event_date', 'Monday, 22nd June 2025'); ?></p>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-4 justify-center">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div class="text-left">
                            <p class="text-sm text-gray-600 font-semibold">TIME</p>
                            <p class="text-xl font-bold text-gray-900">🕔 <?php echo get_theme_mod('event_time', '5:00 PM to 6:30 PM IST'); ?></p>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-4 justify-center">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div class="text-left">
                            <p class="text-sm text-gray-600 font-semibold">FORMAT</p>
                            <p class="text-xl font-bold text-gray-900">🎯 Live & Online</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-4 justify-center">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <div class="text-left">
                            <p class="text-sm text-gray-600 font-semibold">LANGUAGE</p>
                            <p class="text-xl font-bold text-gray-900">English + Hindi Mix</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">
                        🧑‍🏫 Know Your Host – <?php echo get_theme_mod('host_name', 'Nvaya H Mohata'); ?>
                    </h3>
                    <div class="text-lg text-gray-700 space-y-2">
                        <p>🎓 Student Transformation Coach & NLP Master Practitioner</p>
                        <p>🧠 7+ Years of Experience | Thousands of Students Impacted</p>
                    </div>
                    <div class="mt-6 bg-gradient-to-r from-blue-100 to-purple-100 rounded-xl p-6">
                        <p class="text-gray-800 leading-relaxed">
                            "I've cracked the code to student procrastination using NLP, neuroscience, and psychology—and now, 
                            I'm sharing it with you in this power-packed session."
                        </p>
                        <p class="mt-4 font-semibold text-gray-900">
                            This is not just another motivational talk.<br />
                            It's a practical blueprint that's worked for 1,000+ students—<br />
                            and it will work for you too!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration Form Section -->
    <section id="register" class="py-20 gradient-bg-2">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    💥 This Masterclass is for You if…
                </h2>
                
                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-2xl p-6 text-white">
                        <h3 class="font-bold text-lg mb-4">You're Struggling With:</h3>
                        <ul class="text-left space-y-2">
                            <li>🚫 You know what to do, but still don't do it</li>
                            <li>🚫 You start with excitement but quickly give up</li>
                            <li>🚫 You feel stuck, unmotivated, or distracted</li>
                            <li>🚫 You've tried productivity hacks that don't last</li>
                        </ul>
                    </div>
                    <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-2xl p-6 text-white">
                        <h3 class="font-bold text-lg mb-4">You Want:</h3>
                        <ul class="text-left space-y-2">
                            <li>✅ A real, brain-based system that just works</li>
                            <li>✅ Consistent action without willpower</li>
                            <li>✅ To finally trust yourself again</li>
                            <li>✅ Proven strategies that create lasting change</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-2xl p-8 mb-8">
                    <h3 class="text-2xl font-bold text-white mb-4">Special Limited Time Offer</h3>
                    <div class="flex items-center justify-center space-x-4 text-white text-xl">
                        <span class="line-through text-orange-200">💸 Actual Value: ₹499</span>
                        <span class="font-bold text-3xl">🎉 Today: 100% FREE</span>
                    </div>
                    <p class="text-orange-100 mt-2 text-lg font-semibold">🚨 Only a few FREE slots left!</p>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="bg-white rounded-3xl p-8 shadow-2xl">
                <h3 class="text-3xl font-bold text-gray-900 text-center mb-2">
                    👉 REGISTER NOW FOR FREE
                </h3>
                <p class="text-gray-600 text-center mb-8">📝 Fill in to Reserve Your Spot:</p>
                
               <?php include 'custom-whatsapp-form.php'; ?>

                
                <p class="text-sm text-gray-600 text-center mt-6">
                    📩 Confirmation & Access Link will be sent via WhatsApp & Email.
                </p>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-gray-900 text-center mb-12">❓ Frequently Asked Questions</h2>
            
            <div class="space-y-4">
                <?php
                $faqs = array(
                    array(
                        'question' => 'Will I get the recording?',
                        'answer' => 'Yes, for registered participants only. You\'ll receive the recording link within 24 hours after the session.'
                    ),
                    array(
                        'question' => 'Is this live?',
                        'answer' => 'Yes, it\'s a LIVE interactive session. You can ask questions and get real-time answers from the host.'
                    ),
                    array(
                        'question' => 'Is it really free?',
                        'answer' => 'Yes! ₹499 worth content—completely free for limited entries. No hidden costs or surprise charges.'
                    ),
                    array(
                        'question' => 'Do I need special software?',
                        'answer' => 'Just Zoom on your phone or laptop. We\'ll send you the link after registration.'
                    ),
                    array(
                        'question' => 'What if I can\'t attend live?',
                        'answer' => 'No worries! All registered participants will get access to the recording, so you won\'t miss out.'
                    ),
                    array(
                        'question' => 'How long is the masterclass?',
                        'answer' => 'The session is 90 minutes long with actionable content, plus time for Q&A at the end.'
                    )
                );
                
                foreach($faqs as $index => $faq): ?>
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                        <button onclick="toggleFAQ(<?php echo $index; ?>)" class="w-full px-8 py-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors duration-300">
                            <h3 class="text-lg font-semibold text-gray-900"><?php echo $faq['question']; ?></h3>
                            <svg id="faq-icon-<?php echo $index; ?>" class="w-6 h-6 text-gray-400 flex-shrink-0 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="faq-content-<?php echo $index; ?>" class="px-8 pb-6 hidden">
                            <p class="text-gray-700 leading-relaxed"><?php echo $faq['answer']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>