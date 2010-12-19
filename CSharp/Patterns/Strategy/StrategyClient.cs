using System;
using Patterns.Strategy.Ducks;
using Patterns.Strategy.Behaivours;

namespace Patterns.Strategy
{
	public class StrategyClient
	{
		public StrategyClient ()
		{
		}
		
		public void Run()
		{
			Console.WriteLine ("Program to an interface, not an implementation");
			
			RubberDuck rubberDuck = new RubberDuck();
			IFlyBehaviour flyWithRocket = new FlyWithRocket();
			IQuackBehaviour quackWithSqueek = new QuackWithSqueek();
			rubberDuck.setFlyBehaivour(flyWithRocket);
			rubberDuck.setQuackBehaivour(quackWithSqueek);
			rubberDuck.performFly();
			rubberDuck.performQuack();
		}
	}
}

