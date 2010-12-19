using System;

namespace Patterns.Strategy.Behaivours
{
	public class FlyWithRocket : IFlyBehaviour
	{
		public FlyWithRocket ()
		{
		}
		
		public void fly()
		{
			Console.WriteLine("Flying with a rocket");
		}
		
	}
}

