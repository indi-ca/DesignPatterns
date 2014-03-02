#!/usr/bin/env ruby

require "duck"
require "fly_with_wings"

fly_with_wings = FlyWithWings.new
duck = Duck.new(fly_with_wings)

duck.perform_fly