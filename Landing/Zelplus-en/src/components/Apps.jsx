import React from 'react';

const apps = [
  {
    name: 'CRM',
    description: 'Track key metrics and streamline operations.',
    color: 'bg-purple-900',
    icon: '📊',
    image: 'https://media.istockphoto.com/id/1480321577/photo/office-receptionist.webp?b=1&s=170667a&w=0&k=20&c=3YXxxHNMs6rtUuToOdWzkhgLFqMlreGaBf377SiywUM=',

  },
  {
    name: 'Event Management',
    description: 'Plan, promote, and execute successful events.',
    color: 'bg-blue-900',
    icon: '🎉',
  },
  {
    name: 'Professional dashboard',
    description: 'Track key metrics and streamline operations.',
    color: 'bsa',
    icon: '📊',
  },
  {
    name: 'Event Management',
    description: 'Plan, promote, and execute successful events.',
    color: 'bg-purple-900',
    icon: '🎉',
    image: 'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    link :'http://localhost:8000/'
  },
  {
    name: 'Help Center',
    description: 'Provide instant support to your customers.',
    color: 'bg-green-900',
    icon: '❓',
    image: 'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
  },
  {
    name: 'Sales Management',
    description: 'Efficiently manage transactions and inventory.',
    color: 'bg-blue-900',
    icon: '💼',
  },
  {
    name: 'Rental Management',
    description: 'Simplify property management tasks.',
    color: 'bg-yellow-900',
    icon: '🏠',
  },
  {
    image: 'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    name: 'Email Marketing',
    description: 'Create and send engaging email campaigns.',
    color: 'bg-indigo-900',
    icon: '📧',
  },
];
function AppCard({ app }) {
  const hasImage = !!app.image;
  return (
    <div className={`${hasImage ? 'col-span-2' : 'col-span-1'} h-96 rounded-xl overflow-hidden flex relative`}>
      {/* Blurry background */}
      <div className={`absolute inset-0 ${app.color} opacity-75 backdrop-blur-md`}></div>
      {/* Content */}
      <div className={`${hasImage ? 'w-1/2' : 'w-full'} p-6 text-white flex flex-col justify-center relative z-10`}>
        <div>
          <div className="text-4xl mb-7">{app.icon}</div>
          <h3 className="text-2xl font-bold mb-7">{app.name}</h3>
          <p className="text-xl mb-7">{app.description}</p>
        </div>
        <div className="flex space-x-2 justify-center mt-4">
          {app.link ? (
            <a href={app.link} target="_blank" rel="noopener noreferrer">
              <button className="border-2 border-gray-800 px-6 py-2 rounded-full text-lg font-semibold">Learn more</button>
            </a>
          ) : (
            <button className="border-2 border-gray-800 px-6 py-2 rounded-full text-lg font-semibold" onClick={() => alert('No link available')}>Learn more</button>
          )}
          <button className="bg-white text-black px-6 py-2 rounded-full text-lg font-semibold">Free trial</button>
        </div>
      </div>
      {hasImage && (
        <div className="w-1/2 relative z-10">
          <img src={app.image} alt={app.name} className="h-full w-full object-cover" />
        </div>
      )}
    </div>
  );
}


function Apps() {
  return (
    <div className='flex items-center justify-center w-full space-x-7 space-y-7  py-11'>
      <div className='w-5/6 max-w-7xl'>
        <div className="grid grid-cols-3 gap-6">
          {apps.map((app, index) => (
            <AppCard key={index} app={app} />
          ))}
        </div>
        <div className=' mt-14 items-center justify-center flex'>
        <button className="bsa text-white px-4 py-2 rounded-full text-sm">View All Apps</button>
</div>
      </div>
    </div>
  );
}

export default Apps;