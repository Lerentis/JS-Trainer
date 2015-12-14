FROM dell/lamp-base:1.1

#Modified Version of Dells phpbb Dockerfile without MySQL and on a newer version
MAINTAINER Tobias Trabelsi <Tobias.Trabelsi@HS-Bochum.de>

# Update existing packages.
RUN apt-get update

# Install packages
RUN DEBIAN_FRONTEND=noninteractive \
    apt-get -y install \
        php5-gd \
        imagemagick \
        wget \
        unzip
        
# Clean package cache
RUN apt-get -y clean && rm -rf /var/lib/apt/lists/*

# Add scripts.
COPY run.sh /run.sh
RUN chmod 755 /*.sh

# Prepare phpBB (which is installed in the run.sh script).
RUN wget https://www.phpbb.com/files/release/phpBB-3.1.6.zip
RUN unzip phpBB-3.1.6.zip
RUN rm -fr /var/www/html/*
RUN mv phpBB3/* /var/www/html/

# Add volumes for the application
VOLUME  ["/var/www/html"]

EXPOSE 80 443
CMD ["/run.sh"]