FROM dmp1ce/nginx-proxy-letsencrypt

MAINTAINER Tobias.Trabelsi@HS-Bochum.de

# Copy custom files
COPY nginx.tmpl /app/
RUN openssl dhparam -out /etc/nginx/dhparam.pem 2048
