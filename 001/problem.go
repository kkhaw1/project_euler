package main

import (
    "fmt"
)

func main() {
    fmt.Println(problem())
}

func problem() (score int) {
    score = 0
    for i := 0; i < 1000; i++ {
        if i%3 == 0 || i%5 == 0 {
            score += i
        }
    }

    return
}
