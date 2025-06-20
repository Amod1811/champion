import React from 'react';
import { Calendar, Clock, Globe, Users } from 'lucide-react';

export default function EventDetails() {
  return (
    <section className="py-20 bg-white">
      <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 className="text-4xl font-bold text-gray-900 mb-12">📅 Event Details</h2>
        
        <div className="bg-gradient-to-br from-blue-50 to-purple-50 rounded-3xl p-12 shadow-xl">
          <div className="grid md:grid-cols-2 gap-8 mb-8">
            <div className="flex items-center space-x-4 justify-center">
              <Calendar className="w-8 h-8 text-blue-600" />
              <div className="text-left">
                <p className="text-sm text-gray-600 font-semibold">DATE</p>
                <p className="text-xl font-bold text-gray-900">🗓 Monday, 22nd June 2025</p>
              </div>
            </div>
            
            <div className="flex items-center space-x-4 justify-center">
              <Clock className="w-8 h-8 text-green-600" />
              <div className="text-left">
                <p className="text-sm text-gray-600 font-semibold">TIME</p>
                <p className="text-xl font-bold text-gray-900">🕔 5:00 PM to 6:30 PM IST</p>
              </div>
            </div>
            
            <div className="flex items-center space-x-4 justify-center">
              <Globe className="w-8 h-8 text-purple-600" />
              <div className="text-left">
                <p className="text-sm text-gray-600 font-semibold">FORMAT</p>
                <p className="text-xl font-bold text-gray-900">🎯 Live & Online</p>
              </div>
            </div>
            
            <div className="flex items-center space-x-4 justify-center">
              <Users className="w-8 h-8 text-orange-600" />
              <div className="text-left">
                <p className="text-sm text-gray-600 font-semibold">LANGUAGE</p>
                <p className="text-xl font-bold text-gray-900">English + Hindi Mix</p>
              </div>
            </div>
          </div>
          
          <div className="bg-white rounded-2xl p-8 shadow-lg">
            <h3 className="text-2xl font-bold text-gray-900 mb-4">
              🧑‍🏫 Know Your Host – Nvaya H Mohata
            </h3>
            <div className="text-lg text-gray-700 space-y-2">
              <p>🎓 Student Transformation Coach & NLP Master Practitioner</p>
              <p>🧠 7+ Years of Experience | Thousands of Students Impacted</p>
            </div>
            <div className="mt-6 bg-gradient-to-r from-blue-100 to-purple-100 rounded-xl p-6">
              <p className="text-gray-800 leading-relaxed">
                "I've cracked the code to student procrastination using NLP, neuroscience, and psychology—and now, 
                I'm sharing it with you in this power-packed session."
              </p>
              <p className="mt-4 font-semibold text-gray-900">
                This is not just another motivational talk.<br />
                It's a practical blueprint that's worked for 1,000+ students—<br />
                and it will work for you too!
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}