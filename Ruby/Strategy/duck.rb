class Duck
  attr_accessor :fly_behaviour, :quack_behaviour

  def initialize(fly_behaviour)
    @fly_behaviour = fly_behaviour
    #@quack_behaviour = quack_behaviour
  end

  def perform_fly
    fly_behaviour.fly
  end
end