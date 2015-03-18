package main

import (
    "fmt"
)

func main() {
    fmt.Println(solve_problem())
}

func solve_problem() (sum int) {
    sum = 0

    for a, b := 1, 2; a <= 4e6; a, b = b, a+b {
        if b%2 == 0 {
            sum += b
        }
    }

    return
}
