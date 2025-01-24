# HTTP-Java-Client-for-SNMP-Manager

This repository contains the Java-based HTTP Client developed as part of the **Computer Networks 2 (10636455)** course at **An-Najah National University**. The Java Client communicates with the PHP-based SNMP Manager to retrieve and display system information, ARP table, and TCP table.

## Project Overview

The Java Client sends HTTP requests to the PHP server to:
1. Retrieve and display the contents of the System Group.
2. Retrieve and display the ARP table.
3. Retrieve and display the TCP table.

The client also allows editing the last three elements of the System Group by sending HTTP requests to the PHP server.

## Technologies Used
- **Java**: For the HTTP client application.
- **HTTP**: For communication with the PHP server.
- **Apache Tomcat**: For running the Java client (if needed).

## How to Run the Project

### Prerequisites
1. **Java Development Kit (JDK)**: Ensure you have JDK installed to run the Java client.
2. **PHP Server**: Ensure the PHP-based SNMP Manager is running (see the [SNMP Manager Repository](https://github.com/YaraDaraghmeh/SNMP-Manager-PHP)).

### Steps to Run
1. **Clone the Repository**:
   ```bash
   git clone https://github.com/YaraDaraghmeh/HTTP-Java-Client.git
