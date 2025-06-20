import React from 'react';
import { Zap, ArrowRight, Clock, Gift } from 'lucide-react';

export default function Hero() {
  return (
    <section className="relative overflow-hidden bg-gradient-to-br from-blue-900 via-blue-800 to-purple-900">
      <div className="absolute inset-0 bg-black opacity-10"></div>
      <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div className="text-center">
          {/* Fire emoji and urgency */}
          <div className="inline-flex items-center space-x-2 bg-orange-500 text-white px-4 py-2 rounded-full text-sm font-semibold mb-6 animate-pulse">
            <Zap className="w-4 h-4" />
            <span>Limited Free Slots Available</span>
          </div>
          
          {/* Main headline */}
          <h1 className="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight">
            Champions Mindset
            <span className="block text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-yellow-400">
              Blueprint Masterclass
            </span>
          </h1>
          
          {/* Subheadline */}
          <h2 className="text-xl md:text-2xl lg:text-3xl text-blue-100 mb-4 font-semibold">
            🔥 Eliminate Procrastination & Unlock Peak Performance
          </h2>
          
          <p className="text-lg md:text-xl text-blue-200 mb-8 max-w-3xl mx-auto">
            Without Willpower. Without Discipline. Just Science-Backed Mindset Shifts.
          </p>
          
          {/* CTA Buttons */}
          <div className="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
            <button className="bg-gradient-to-r from-orange-500 to-red-500 text-white px-8 py-4 rounded-full text-lg font-bold hover:from-orange-600 hover:to-red-600 transition-all duration-300 transform hover:scale-105 shadow-2xl flex items-center space-x-2">
              <span>🚀 Register Now for FREE</span>
              <ArrowRight className="w-5 h-5" />
            </button>
            <div className="flex items-center space-x-2 text-blue-200">
              <Clock className="w-5 h-5" />
              <span className="text-sm">🎟 Limited Free Slots Available</span>
            </div>
          </div>
          
          {/* Target audience */}
          <div className="inline-block bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-6 text-white max-w-2xl">
            <div className="flex items-center justify-center space-x-2 mb-3">
              <Gift className="w-6 h-6 text-yellow-400" />
              <h3 className="text-xl font-bold">🧠 Designed for Students Who Are Ready to Elevate Their Life</h3>
            </div>
            <div className="grid md:grid-cols-2 gap-3 text-sm">
              <p>• Struggling to start? Always falling back into old habits?</p>
              <p>• Tired of feeling stuck, distracted, or inconsistent?</p>
            </div>
            <p className="mt-4 text-blue-200 font-semibold">
              This masterclass gives you the blueprint to take action—consistently and confidently.
            </p>
          </div>
        </div>
      </div>
    </section>
  );
}