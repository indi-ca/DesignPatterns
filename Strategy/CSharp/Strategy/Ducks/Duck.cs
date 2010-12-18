using System;
using Strategy;
using Strategy.Behaivours;

namespace Strategy.Ducks
{
	public abstract class Duck
	{
		IFlyBehaviour flybehaviour;
		IQuackBehaviour quackbehavior;
		
		public Duck ()
		{
		}
		
		public void setFlyBehaivour(IFlyBehaviour behaviour)
		{
			flybehaviour = behaviour;
		}
		
		public void performFly()
		{
			flybehaviour.fly();
		}
	}
}

