# Azure Essentials
#### Summary
---
##### 1. Core Infrastructure Services
###### 1.1. Compute
- Virtual Machines, Virtual Machine Scale Sets, App Services
###### 1.2. Networking
- Virtual Networks, Load Balancers, VPN Gateways, …
###### 1.3. Storage
- Storage Accounts, Recovery Services, …
###### 1.4. Database
- Azure CosmosDB, Azure SQL, Azure Synapse Analytics (SQL Data Warehouses), …
###### 1.5. Internet of Things
- Azure IoT Central, Azure IoT Hub, Azure IoT Edge, …
###### 1.6. Big Data and Analytics
- HDInsight, Azure Data Lake Analytics, Azure Databricks, …
###### 1.7. Artificial Intelligence.
- Azure Machine Learning, Azure Cognitive Search, …
##### 2. Advanced Infrastructure Services
- Scaling
- Network Security and Load Balancing
- Storage Blobs and Files
- Resource Access and Security
- Monitoring
- Costs
- Azure Resource Manager (Templates)
##### 3. Databases and Analytics
###### 3.1. Purchasing Models
- vCore-based
- DTU-based (DTU = Database Transaction Unit)
- Serverless
- Azure Cosmos DB Request Units (RUs)
- Streaming Units (SUs)
###### 3.2. NoSQL Databases
- **Key-Value:** Redis, Cassandra, Memcached, Couchbase
- **Document:** MongoDB, CouchDB, OrientDB
- **Column Store:** Cassandra, DynamoDB, Hbase
- **Graph:** Neo4J, FlockDB, OrientDB
###### 3.3. Azure Analytics Services
- Azure Synapse Analytics
- Azure Databricks
- HDInsight clusters
- PowerBI Embedded
- Stream Analytics jobs
- Windowing: Tumbling, Hopping, Sliding, Session,  Snapshot
##### 4. Azure for Developers
###### 4.1. Azure Container Registry
- It is a managed, private Docker registry service
- Based on the open-source Docker Registry 2.0
- Used to store and manage private Docker container images
- Available in three SKUs: Basic, Standard, and Premium
- Offers support for both Windows and Linux images
- Supports Docker container images, Helm charts, and OCI images
- Building, testing, publishing and deploying images with ACR Tasks
###### 4.2. Azure Kubernetes Service
- Kubernetes masters are managed by Azure
- AKS nodes run on Azure virtual machines
###### 4.3. App Service
- Build and host web apps, mobile back ends, and RESTful APIs
- No need to manage infrastructure. Supports both Windows and Linux
- Auto-scaling and high availability
- ###### 4.3.1. App Service Plans 
- Number of VM instances
- Size of VM instances (Small, Medium, Large)
- Pricing tier (Free, Shared, Basic, Standard, Premium, PremiumV2, Isolated)
###### 4.4. Azure Functions
- Solution for running small pieces of code (functions) in the cloud
- Allows you to develop serverless applications on Microsoft Azure
- Pay only for the time your code runs
- ###### 4.4.1. Durable Functions
  > An extension of Azure Functions. Allows us to write stateful functions in a serverless environment. Two components: Stateful workflows (orchestrator functions), Stateful entries (entity functions)
###### 4.5. Azure Logic Apps
> Logic Apps is a cloud-based platform that helps you create and run automated workflows for integrating apps, data, services, and systems.
##### 5. Azure and DevOps
###### 5.1. Azure Kubernetes Service
> Deploy and manage containerized applications more easily with a fully managed Kubernetes service. Azure Kubernetes Service (AKS) offers serverless Kubernetes, an integrated continuous integration and continuous delivery (CI/CD) experience, and enterprise-grade security and governance.
###### 5.2. Azure DevOps Services
- Azure Boards (Agile planning tools)
- Azure Pipelines (CI/CD for any platform and language)
- Azure Repos (Unlimited free private repos)
- Azure Test Plans (Manual and exploratory testing)
- Azure Artifacts (Universal package repository)
- Extensions Marketplace (Over 1000 extensions)
###### 5.3. Azure DevOps Projects
> Build any Azure application, on any Azure service, in less than five minutes