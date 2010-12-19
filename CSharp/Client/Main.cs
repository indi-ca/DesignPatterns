using System;
using Patterns.Strategy;

namespace Client
{
	class MainClass
	{
		public static void Main (string[] args)
		{
			Console.WriteLine ("Hello World!");
			var strategyClient = new StrategyClient();
			strategyClient.Run();
		}
	}
}

