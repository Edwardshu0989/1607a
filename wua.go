package main

import (
	"fmt"
)

func main() {
	themine := [10]string{"ore", "ore", "ore", "ore", "ore", "are", "are", "are", "are"}
	find := make(chan string)
	wa := make(chan string)
	doneChan := make(chan string)
	n := 5
	go func(mine [10]string) {
		for _, item := range mine {
			if item == "ore" {
				find <- item
			}
		}
	}(themine)
	go func() {

		for item := range find {
			fmt.Println("From Finder:", item)

			wa <- "ore" //send to minedOreChan
		}

	}()
	go func() {
		var i = 0
		// minedOre := <-wa //read from minedOreChan
		for item := range wa {
			i++
			fmt.Println("From Miner:", item)
			fmt.Println("From Smelter: Ore is smelted", item)
			if i == n {
				doneChan <- "ros"
			}
		}

	}()
	<-doneChan
}
