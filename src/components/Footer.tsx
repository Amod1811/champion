import React from 'react';
import { ArrowRight, Clock } from 'lucide-react';

export default function Footer() {
  return (
    <footer className="bg-gradient-to-br from-gray-900 to-black text-white py-20">
      <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 className="text-4xl md:text-5xl font-bold mb-6">
          🚀 Ready to Upgrade Your Mindset?
        </h2>
        <p className="text-2xl text-gray-300 mb-12">
          Stop procrastinating. Start becoming a Champion.
        </p>
        
        <div className="bg-gradient-to-r from-orange-500 to-red-500 rounded-3xl p-12 mb-12">
          <button className="bg-white text-gray-900 px-8 py-4 rounded-full text-xl font-bold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-2xl flex items-center space-x-3 mx-auto">
            <span>🔓 Register Now for FREE</span>
            <ArrowRight className="w-6 h-6" />
          </button>
          <div className="flex items-center justify-center space-x-2 mt-6 text-orange-100">
            <Clock className="w-5 h-5" />
            <span className="text-lg font-semibold">🎟 Limited Free Seats Available – Don't Miss Out!</span>
          </div>
        </div>
        
        <div className="border-t border-gray-800 pt-8">
          <div className="flex items-center justify-center space-x-2 mb-4">
            <div className="w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
              <span className="text-white font-bold text-lg">CM</span>
            </div>
            <div className="text-left">
              <h3 className="text-xl font-bold">Champions Mindset Blueprint</h3>
              <p className="text-gray-400 text-sm">Transform Your Life. Eliminate Procrastination.</p>
            </div>
          </div>
          <p className="text-gray-500 text-sm">
            © 2025 Champions Mindset Blueprint. All rights reserved.
          </p>
        </div>
      </div>
    </footer>
  );
}