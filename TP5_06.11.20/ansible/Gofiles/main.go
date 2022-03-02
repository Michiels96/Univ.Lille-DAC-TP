package main

import(
	"fmt"
	"net/http"
	"os"
)

func main(){
	// pour faire tourner le CPU, utile pour vérifier la charge réseau
	sum := 0
	for i := 1; i < 10000; i++ {
		sum += i
	}
	http.HandleFunc("/", func(w http.ResponseWriter, r *http.Request){
		r.Header.Set("Content-type", "text/html")
		fmt.Fprintf(w, "<h1>Hello hostname: %s</h1><br/><h3>counter: %d</h3>", os.Getenv("HOSTNAME"), sum)
	})

	http.ListenAndServe(":80", nil)
}