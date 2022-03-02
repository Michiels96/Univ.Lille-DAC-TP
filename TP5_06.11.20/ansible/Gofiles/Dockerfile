FROM golang:alpine AS builder
COPY main.go /app/
WORKDIR /app
RUN CGO_ENABLED=0 go build -ldflags="-w -s" main.go

FROM scratch AS runner
COPY --from=builder /app/main /app/main
ENTRYPOINT ["/app/main"]