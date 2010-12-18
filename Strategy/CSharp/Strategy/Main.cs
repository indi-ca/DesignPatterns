using System;
using Strategy.Ducks;
using Strategy.Behaivours;

namespace Strategy
{
	class MainClass
	{
		public static void Main (string[] args)
		{
			Console.WriteLine ("Program to an interface, not an implementation");
			
			RubberDuck rubberDuck = new RubberDuck();
			IFlyBehaviour flyWithRocket = new FlyWithRocket();
			rubberDuck.setFlyBehaivour(flyWithRocket);
			rubberDuck.performFly();
			
		}
	}
}

