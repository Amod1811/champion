import React from 'react';
import { Brain, Zap, Target, Gift } from 'lucide-react';

export default function Curriculum() {
  const modules = [
    {
      icon: <Brain className="w-12 h-12 text-purple-500" />,
      title: "Procrastination Destroyer Formula",
      description: "The neuroscience-based solution that eliminates overthinking and makes action automatic."
    },
    {
      icon: <Zap className="w-12 h-12 text-blue-500" />,
      title: "NLP + Brain Science System", 
      description: "My tested framework to take massive action—without needing \"discipline\" or \"motivation hacks.\""
    },
    {
      icon: <Target className="w-12 h-12 text-green-500" />,
      title: "The Micro-Wins Momentum Formula™",
      description: "Forget rigid routines. Learn how small wins create massive drive every single day."
    },
    {
      icon: <Zap className="w-12 h-12 text-orange-500" />,
      title: "Instant Action Hack",
      description: "A simple brain trick to start anything fast—from assignments to career goals."
    }
  ];

  return (
    <section className="py-20 bg-gradient-to-br from-blue-900 via-purple-900 to-blue-900">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold text-white mb-6">
            🧬 What You'll Learn in 90 Minutes
          </h2>
          <p className="text-xl text-blue-200 max-w-3xl mx-auto">
            A complete blueprint to transform your mindset and eliminate procrastination forever
          </p>
        </div>

        <div className="grid md:grid-cols-2 gap-8 mb-12">
          {modules.map((module, index) => (
            <div key={index} className="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 hover:bg-opacity-20 transition-all duration-300 border border-white border-opacity-20">
              <div className="flex items-start space-x-4">
                <div className="flex-shrink-0 bg-white bg-opacity-20 rounded-full p-3">
                  {module.icon}
                </div>
                <div>
                  <h3 className="text-xl font-bold text-white mb-3">✅ {module.title}:</h3>
                  <p className="text-blue-100 leading-relaxed">{module.description}</p>
                </div>
              </div>
            </div>
          ))}
        </div>

        {/* Bonus Section */}
        <div className="bg-gradient-to-r from-orange-500 to-red-500 rounded-2xl p-8 text-center">
          <div className="flex items-center justify-center space-x-3 mb-4">
            <Gift className="w-8 h-8 text-white" />
            <h3 className="text-2xl font-bold text-white">🎁 BONUS: Worksheets + Action Plan Template</h3>
          </div>
          <p className="text-orange-100 text-lg">
            Take action immediately with our proven worksheets and step-by-step action plan template
          </p>
        </div>
      </div>
    </section>
  );
}