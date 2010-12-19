using System;

namespace Patterns.Strategy.Behaivours
{
	public class QuackWithSqueek : IQuackBehaviour
	{
		public QuackWithSqueek ()
		{
		}
		
		public void quack()
		{
			Console.WriteLine("Squeek squeek");
		}
		
	}
}

