import React from 'react';
import { CheckCircle, Target, Lock, Repeat, Zap } from 'lucide-react';

export default function Benefits() {
  const benefits = [
    {
      icon: <CheckCircle className="w-8 h-8 text-green-500" />,
      title: "No more time wasted",
      description: "Stop the endless cycle of procrastination"
    },
    {
      icon: <Target className="w-8 h-8 text-blue-500" />,
      title: "No more unfinished tasks", 
      description: "Complete what you start with confidence"
    },
    {
      icon: <Zap className="w-8 h-8 text-orange-500" />,
      title: "No more relying on motivation",
      description: "Build systems that work without willpower"
    }
  ];

  const whyAttend = [
    {
      icon: <Repeat className="w-12 h-12 text-purple-500" />,
      title: "🧩 Stay Consistent",
      description: "No more starting & stopping. Build unstoppable momentum."
    },
    {
      icon: <Lock className="w-12 h-12 text-green-500" />,
      title: "🔒 Trust Yourself Again", 
      description: "Keep promises to yourself, and feel proud every day."
    },
    {
      icon: <Target className="w-12 h-12 text-blue-500" />,
      title: "🔁 Build Habits That Stick",
      description: "Small, daily actions that move you closer to success."
    },
    {
      icon: <Zap className="w-12 h-12 text-orange-500" />,
      title: "🎯 Reach Big Goals",
      description: "Align your thoughts, feelings, and actions for maximum results."
    }
  ];

  return (
    <section className="py-20 bg-gray-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {/* Benefits Grid */}
        <div className="text-center mb-16">
          <h2 className="text-3xl md:text-4xl font-bold text-gray-900 mb-12">
            Transform Your Life Starting Today
          </h2>
          <div className="grid md:grid-cols-3 gap-8">
            {benefits.map((benefit, index) => (
              <div key={index} className="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                <div className="flex flex-col items-center text-center">
                  {benefit.icon}
                  <h3 className="text-xl font-bold text-gray-900 mt-4 mb-2">✅ {benefit.title}</h3>
                  <p className="text-gray-600">{benefit.description}</p>
                </div>
              </div>
            ))}
          </div>
        </div>

        {/* Why Attend Section */}
        <div className="bg-white rounded-3xl p-12 shadow-xl">
          <h2 className="text-3xl md:text-4xl font-bold text-gray-900 text-center mb-4">
            📌 Why You Should Attend
          </h2>
          <p className="text-xl text-gray-600 text-center mb-12">
            This Masterclass is for students who want to:
          </p>
          
          <div className="grid md:grid-cols-2 gap-8">
            {whyAttend.map((item, index) => (
              <div key={index} className="flex items-start space-x-4 p-6 bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl hover:from-blue-100 hover:to-purple-100 transition-all duration-300">
                <div className="flex-shrink-0">
                  {item.icon}
                </div>
                <div>
                  <h3 className="text-xl font-bold text-gray-900 mb-2">{item.title}</h3>
                  <p className="text-gray-700">{item.description}</p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  );
}