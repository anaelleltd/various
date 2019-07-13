import turtle

def draw_triangle (some_turtle):
    for i in range(1,5):
        some_turtle.forward(80)
        some_turtle.right(120)

def draw_art():
    window = turtle.Screen()
    window.bgcolor("white")
    #Create the flower-turtle
    flower = turtle.Turtle()
    flower.shape("circle")
    flower.color("blue")
    flower.speed(10)
    #Draw the stem
    flower.right(275)
    flower.forward(200)
    #Shift the flower-turtle angle
    for i in range (1,38):
        flower.color("blue", "yellow")
        flower.begin_fill()
        draw_triangle(flower)
        flower.end_fill()
        flower.right(10)
        flower.forward (80)

    window.exitonclick()

draw_art()
