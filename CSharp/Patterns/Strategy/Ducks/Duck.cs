using System;
using Patterns.Strategy;
using Patterns.Strategy.Behaivours;

namespace Patterns.Strategy.Ducks
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
		
		public void setQuackBehaivour(IQuackBehaviour behaivour)
		{
			quackbehavior = behaivour;
		}
		
		public void performFly()
		{
			flybehaviour.fly();
		}
		
		public void performQuack()
		{
			quackbehavior.quack();
		}
	}
}

