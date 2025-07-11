<?php
$pageTitle = "Premium Information - Nexi Bot Documentation";
$pageDescription = "Learn about Nexi Bot premium features, pricing plans, and how to upgrade for advanced Discord server management.";
include 'includes/header.php';
?>

<div class="content-section">
    <div class="container">
        <div class="content-grid">
            <div class="sidebar">
                <h3>Premium</h3>
                <ul>
                    <li><a href="#overview" class="active">What is Premium?</a></li>
                    <li><a href="#plans">Premium Plans</a></li>
                    <li><a href="#purchase">Purchase Information</a></li>
                    <li><a href="#features">Premium Features</a></li>
                    <li><a href="#activation">Premium Activation</a></li>
                    <li><a href="#support">Premium Support</a></li>
                    <li><a href="#billing">Billing Information</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ul>
            </div>
            
            <div class="content-main">
                <h1>Premium Information</h1>
                <p>Unlock the full potential of your Discord server with Nexi Premium. Get advanced features, priority support, and exclusive integrations that transform your community experience.</p>

                <div class="alert alert-success">
                    <strong>Pre-Order Now Open!</strong> Nexi Bot is in testing phase. <a href="https://nexibot.uk/features" target="_blank">Pre-order premium</a> to get early access when we launch!
                </div>

                <!-- Pricing Alert -->
                <div class="alert alert-info" style="margin: 30px 0; background: linear-gradient(135deg, var(--premium-color), var(--primary-hover)); color: white; border: none;">
                    <div style="text-align: center;">
                        <h3 style="margin-bottom: 15px; color: white;">Limited Time Pre-Order Pricing</h3>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin: 20px 0;">
                            <div style="background: rgba(255,255,255,0.1); padding: 15px; border-radius: 8px;">
                                <div style="font-size: 1.1rem; font-weight: 600;">Monthly</div>
                                <div style="font-size: 1.8rem; font-weight: 800;">£2.99</div>
                                <div style="font-size: 0.9rem; opacity: 0.8;">Was £4.99</div>
                            </div>
                            <div style="background: rgba(255,255,255,0.1); padding: 15px; border-radius: 8px;">
                                <div style="font-size: 1.1rem; font-weight: 600;">Annual</div>
                                <div style="font-size: 1.8rem; font-weight: 800;">£24</div>
                                <div style="font-size: 0.9rem; opacity: 0.8;">Was £35</div>
                            </div>
                            <div style="background: rgba(255,255,255,0.1); padding: 15px; border-radius: 8px;">
                                <div style="font-size: 1.1rem; font-weight: 600;">Lifetime</div>
                                <div style="font-size: 1.8rem; font-weight: 800;">£79</div>
                                <div style="font-size: 0.9rem; opacity: 0.8;">Was £120</div>
                            </div>
                        </div>
                        <p style="margin-top: 15px; font-weight: 600;">Pre-order pricing ends at launch. Lock in these rates forever!</p>
                    </div>
                </div>

                <h2 id="overview">What is Nexi Premium?</h2>
                
                <div class="hero-section" style="margin: 40px 0; padding: 60px 40px; background: var(--premium-gradient); border-radius: var(--border-radius-lg);">
                    <div style="text-align: center; color: var(--background-color);">
                        <h3 style="font-size: 2.5rem; margin-bottom: 20px; color: var(--background-color);">Transform Your Discord Server</h3>
                        <p style="font-size: 1.2rem; margin-bottom: 30px; color: rgba(15, 15, 35, 0.8); max-width: 600px; margin-left: auto; margin-right: auto;">Nexi Premium unlocks advanced automation, AI-powered moderation, comprehensive analytics, and exclusive integrations for the ultimate Discord management experience.</p>
                        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                            <a href="https://nexibot.uk/features" target="_blank" class="btn" style="background: var(--background-color); color: var(--premium-color); font-weight: 700;">Upgrade Now</a>
                            <a href="#features" class="btn" style="background: transparent; color: var(--background-color); border: 2px solid var(--background-color);">View Features</a>
                        </div>
                    </div>
                </div>

                <div class="alert alert-warning" style="margin: 40px auto; max-width: 800px;">
                    <strong>Pre-order Pricing Notice:</strong> Current pricing is pre-order/early access pricing. This special rate applies only to your first billing period (month/year) or if you purchase lifetime access. Regular pricing will apply for subsequent renewals unless you have lifetime access.
                </div>

                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L14.09 8.26L22 9L16 14.74L17.18 22.68L12 19.77L6.82 22.68L8 14.74L2 9L9.91 8.26L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>AI-Powered Tools</h3>
                        <p>Advanced AI moderation, content filtering, and intelligent automation that learns and adapts to your community.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 3V9L12 14L21 9V3H3Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                                <path d="M21 16V10L12 15L3 10V16" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Advanced Analytics</h3>
                        <p>Deep insights into server growth, member engagement, and community health with custom reports and data export.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Exclusive Integrations</h3>
                        <p>Connect with Google Calendar, ERLC, Roblox, and more to streamline your workflow and enhance functionality.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <polygon points="13,2 3,14 12,14 11,22 21,10 12,10 13,2" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Priority Performance</h3>
                        <p>Faster response times, priority processing, and dedicated resources for premium servers and users.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Advanced Automation</h3>
                        <p>Create complex workflows, conditional logic, and multi-step automation chains to run your server efficiently.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M19 10v2a7 7 0 0 1-14 0v-2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <line x1="12" y1="19" x2="12" y2="23" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <line x1="8" y1="23" x2="16" y2="23" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Premium Support</h3>
                        <p>Priority support with faster response times, direct developer access, and personalized assistance.</p>
                    </div>
                </div>

                <h2 id="plans">Premium Plans</h2>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin: 40px 0;">
                    
                    <!-- Monthly Plan -->
                    <div class="feature-card" style="border: 2px solid var(--premium-color); position: relative;">
                        <div style="text-align: center;">
                            <div class="feature-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <h3>Premium Monthly</h3>
                            <div style="text-align: center; margin: 15px 0;">
                                <div style="font-size: 1.2rem; color: var(--text-muted); text-decoration: line-through;">£4.99</div>
                                <div style="font-size: 2.5rem; font-weight: 800; color: var(--premium-color); margin: 5px 0;">£2.99</div>
                                <div style="color: var(--text-muted); margin-bottom: 10px;">per month</div>
                                <div style="background: var(--premium-color); color: white; padding: 4px 12px; border-radius: 16px; font-size: 0.8rem; font-weight: 600; display: inline-block;">40% OFF PRE-ORDER</div>
                            </div>
                            
                            <h4>What's Included:</h4>
                            <ul style="text-align: left; margin: 20px 0;">
                                <li><span class="status-indicator status-yes">INCLUDED</span> All premium features</li>
                                <li><span class="status-indicator status-yes">INCLUDED</span> Works on ALL your servers</li>
                                <li><span class="status-indicator status-yes">INCLUDED</span> Priority support (6-12 hours*)</li>
                                <li><span class="status-indicator status-yes">INCLUDED</span> Advanced integrations</li>
                                <li><span class="status-indicator status-yes">INCLUDED</span> AI-powered moderation</li>
                                <li><span class="status-indicator status-yes">INCLUDED</span> Comprehensive analytics</li>
                                <li><span class="status-indicator status-yes">INCLUDED</span> Advanced automation</li>
                                <li><span class="status-indicator status-yes">INCLUDED</span> High-quality music</li>
                                <li><span class="status-indicator status-yes">INCLUDED</span> Economy system</li>
                                <li>✓ Advanced giveaways</li>
                            </ul>
                            
                            <a href="https://nexibot.uk/features" target="_blank" class="btn btn-premium" style="width: 100%; margin-top: 20px;">Choose Monthly</a>
                        </div>
                    </div>
                    
                    <!-- Annual Plan -->
                    <div class="feature-card" style="border: 2px solid var(--success-color); position: relative;">
                        <div style="position: absolute; top: -10px; left: 50%; transform: translateX(-50%); background: var(--success-color); color: white; padding: 5px 15px; border-radius: 20px; font-size: 0.9rem; font-weight: 600;">BEST VALUE</div>
                        
                        <div style="text-align: center;">
                            <div class="feature-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <h3>Premium Annual</h3>
                            <div style="text-align: center; margin: 15px 0;">
                                <div style="font-size: 1.2rem; color: var(--text-muted); text-decoration: line-through;">£35 (after launch)</div>
                                <div style="font-size: 2.5rem; font-weight: 800; color: var(--success-color); margin: 5px 0;">£24</div>
                                <div style="color: var(--text-muted); margin-bottom: 10px;">per year</div>
                                <div style="background: var(--success-color); color: white; padding: 4px 12px; border-radius: 16px; font-size: 0.8rem; font-weight: 600; display: inline-block;">31% OFF PRE-ORDER</div>
                            </div>
                            
                            <h4>Everything in Monthly PLUS:</h4>
                            <ul style="text-align: left; margin: 20px 0;">
                                <li><span class="status-indicator status-yes">INCLUDED</span> All monthly features</li>
                                <li><span class="status-indicator status-yes">INCLUDED</span> 33% cost savings vs monthly</li>
                                <li><span class="status-indicator status-yes">INCLUDED</span> Locked-in pre-order pricing</li>
                                <li><span class="status-indicator status-yes">INCLUDED</span> Priority feature access</li>
                                <li><span class="status-indicator status-yes">INCLUDED</span> Annual roadmap input</li>
                            </ul>
                            
                            <a href="https://nexibot.uk/features" target="_blank" class="btn" style="background: var(--success-color); color: white; width: 100%; margin-top: 20px;">Choose Annual</a>
                        </div>
                    </div>
                    
                    <!-- Lifetime Plan -->
                    <div class="feature-card" style="border: 2px solid #ff6b6b; position: relative;">
                        <div style="position: absolute; top: -10px; left: 50%; transform: translateX(-50%); background: #ff6b6b; color: white; padding: 5px 15px; border-radius: 20px; font-size: 0.9rem; font-weight: 600;">ULTIMATE</div>
                        
                        <div style="text-align: center;">
                            <div class="feature-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <h3>Lifetime Premium</h3>
                            <div style="text-align: center; margin: 15px 0;">
                                <div style="font-size: 1.2rem; color: var(--text-muted); text-decoration: line-through;">£120 (after launch)</div>
                                <div style="font-size: 2.5rem; font-weight: 800; color: #ff6b6b; margin: 5px 0;">£79</div>
                                <div style="color: var(--text-muted); margin-bottom: 10px;">one-time payment</div>
                                <div style="background: #ff6b6b; color: white; padding: 4px 12px; border-radius: 16px; font-size: 0.8rem; font-weight: 600; display: inline-block;">34% OFF PRE-ORDER</div>
                            </div>
                            
                            <h4>Ultimate Premium Experience:</h4>
                            <ul style="text-align: left; margin: 20px 0;">
                                <li><span class="status-indicator status-yes">INCLUDED</span> All premium features forever</li>
                                <li><span class="status-indicator status-yes">INCLUDED</span> No recurring payments</li>
                                <li><span class="status-indicator status-yes">INCLUDED</span> All future features included</li>
                                <li><span class="status-indicator status-yes">INCLUDED</span> VIP support status (2-6 hours*)</li>
                                <li><span class="status-indicator status-yes">INCLUDED</span> Direct developer access</li>
                                <li><span class="status-indicator status-yes">INCLUDED</span> Beta feature testing</li>
                                <li><span class="status-indicator status-yes">INCLUDED</span> Custom feature requests</li>
                                <li><span class="status-indicator status-yes">INCLUDED</span> Lifetime updates</li>
                            </ul>
                            
                            <a href="https://nexibot.uk/features" target="_blank" class="btn" style="background: #ff6b6b; color: white; width: 100%; margin-top: 20px;">Choose Lifetime</a>
                        </div>
                    </div>
                </div>

                <div style="text-align: center; margin: 40px 0; padding: 20px; background: var(--surface-color); border-radius: var(--border-radius); border: 1px solid var(--border-color);">
                    <p style="margin: 0; color: var(--text-secondary);"><em>*Response times are estimated, not guaranteed. Actual response times may vary based on support volume and issue complexity.</em></p>
                </div>

                <h2 id="purchase">How to Purchase Premium</h2>

                <div class="command-grid">
                    <div class="command-card">
                        <div class="command-title">
                            <h3>Official Purchase Method</h3>
                            <span style="background: var(--success-color); color: white; padding: 4px 8px; border-radius: 15px; font-size: 0.8rem;">Only Method</span>
                        </div>
                        
                        <h4>Secure Purchase via Website</h4>
                        <ol>
                            <li>Visit <a href="https://nexibot.uk/features" target="_blank" style="color: var(--primary-color);">nexibot.uk/features</a></li>
                            <li>Choose your preferred premium plan</li>
                            <li>Click the purchase button for your selected plan</li>
                            <li>Complete secure checkout (processed by Stripe)</li>
                            <li>Premium activates within 15 minutes automatically</li>
                        </ol>
                        
                        <div class="alert alert-info">
                            <strong>Important:</strong> Premium can only be purchased through nexibot.uk/features. All payments are securely processed through Stripe.
                        </div>
                        
                        <div class="alert alert-warning">
                            <strong>Pre-order Pricing:</strong> Early access pricing is only guaranteed for your first billing period (month/year) or lifetime purchase. Regular pricing applies after the initial period ends (unless you purchase lifetime access).
                        </div>
                    </div>
                            <li>Join our <a href="https://discord.gg/nexibot" target="_blank">Discord support server</a></li>
                            <li>Create a premium pre-order ticket</li>
                            <li>Staff will assist with payment options</li>
                </div>

                <h2 id="features">Premium Features Breakdown</h2>

                <h3>AI-Powered Moderation</h3>
                <div class="command-card">
                    <h4>Intelligent Content Protection</h4>
                    <ul>
                        <li><strong>Smart Detection:</strong> Context-aware content analysis that understands intent</li>
                        <li><strong>Image Moderation:</strong> Automatic inappropriate image detection and removal</li>
                        <li><strong>Toxicity Prevention:</strong> Identify and prevent harmful language patterns</li>
                        <li><strong>Learning System:</strong> AI improves over time based on your server's needs</li>
                        <li><strong>Custom Sensitivity:</strong> Adjustable detection levels for different channels</li>
                        <li><strong>Multi-Language Support:</strong> Protect global communities</li>
                    </ul>
                    
                    <div class="alert alert-success">
                        <strong>Results:</strong> Premium servers see up to 85% reduction in manual moderation work with AI-powered tools.
                    </div>
                </div>

                <h3>Advanced Analytics & Insights</h3>
                <div class="command-card">
                    <h4>Data-Driven Server Management</h4>
                    <ul>
                        <li><strong>Member Analytics:</strong> Track growth, retention, and engagement patterns</li>
                        <li><strong>Activity Insights:</strong> Understand peak hours and channel popularity</li>
                        <li><strong>Engagement Scoring:</strong> Identify your most active community members</li>
                        <li><strong>Growth Predictions:</strong> AI-powered forecasts for server development</li>
                        <li><strong>Custom Reports:</strong> Automated weekly/monthly analytics reports</li>
                        <li><strong>Data Export:</strong> Download data in CSV/JSON formats</li>
                        <li><strong>Visual Dashboards:</strong> Beautiful charts and graphs</li>
                    </ul>
                </div>

                <h3>Exclusive Integrations</h3>
                <div class="command-card">
                    <h4>Connect Your Ecosystem</h4>
                    
                    <h5>Google Workspace Integration</h5>
                    <ul>
                        <li>Google Calendar sync with Discord events</li>
                        <li>Google Forms response automation</li>
                        <li>Gmail notification integration</li>
                        <li>Google Drive file sharing</li>
                    </ul>
                    
                    <h5>Gaming Integrations</h5>
                    <ul>
                        <li><strong>ERLC (Emergency Response: Liberty County):</strong>
                            <ul>
                                <li>Player statistics and lookup</li>
                                <li>Server status monitoring</li>
                                <li>Performance tracking</li>
                                <li>Custom notifications</li>
                            </ul>
                        </li>
                        <li><strong>Roblox Platform:</strong>
                            <ul>
                                <li>Account verification system</li>
                                <li>Group management tools</li>
                                <li>Game statistics tracking</li>
                                <li>Avatar display features</li>
                            </ul>
                        </li>
                    </ul>
                    
                    <h5>Business Tools</h5>
                    <ul>
                        <li>Jotform advanced form handling</li>
                        <li>Custom API webhook integration</li>
                        <li>Social media monitoring</li>
                        <li>Payment system integration</li>
                    </ul>
                </div>

                <h3>Advanced Automation & Workflows</h3>
                <div class="command-card">
                    <h4>Automate Everything</h4>
                    <ul>
                        <li><strong>Visual Workflow Builder:</strong> Drag-and-drop automation creation</li>
                        <li><strong>Conditional Logic:</strong> If-then-else automation chains</li>
                        <li><strong>Multi-Step Processes:</strong> Complex automation workflows</li>
                        <li><strong>Event Triggers:</strong> React to any Discord event automatically</li>
                        <li><strong>Scheduled Tasks:</strong> Time-based automation</li>
                        <li><strong>Template Library:</strong> Pre-built automation templates</li>
                        <li><strong>Testing Environment:</strong> Safe automation testing</li>
                    </ul>
                    
                    <h4>Example Automations:</h4>
                    <ul>
                        <li>Welcome new members with personalized sequences</li>
                        <li>Automatically assign roles based on activity</li>
                        <li>Create progressive moderation systems</li>
                        <li>Send scheduled announcements</li>
                        <li>Manage event registrations</li>
                    </ul>
                </div>

                <h3>Enhanced Music System</h3>
                <div class="command-card">
                    <h4>Premium Audio Experience</h4>
                    <ul>
                        <li><strong>High-Quality Audio:</strong> Crystal-clear sound processing</li>
                        <li><strong>Audio Effects:</strong> Equalizer, reverb, echo, and more</li>
                        <li><strong>Unlimited Queues:</strong> No restrictions on playlist length</li>
                        <li><strong>Multi-Source Support:</strong> YouTube, Spotify, Apple Music, Deezer</li>
                        <li><strong>Advanced Controls:</strong> Seek, loop sections, speed control</li>
                        <li><strong>DJ Mode:</strong> Advanced queue management</li>
                        <li><strong>Custom Uploads:</strong> Upload your own audio files</li>
                    </ul>
                </div>

                <h3>Virtual Economy System</h3>
                <div class="command-card">
                    <h4>Engage Your Community</h4>
                    <ul>
                        <li><strong>Custom Currency:</strong> Create your server's virtual economy</li>
                        <li><strong>Multiple Earning Methods:</strong> Messages, voice time, activities</li>
                        <li><strong>Virtual Marketplace:</strong> Server shop with custom items</li>
                        <li><strong>Role Purchases:</strong> Let members buy special roles</li>
                        <li><strong>Daily Rewards:</strong> Automated reward distribution</li>
                        <li><strong>Economy Analytics:</strong> Track economic health</li>
                        <li><strong>Transaction Logs:</strong> Complete audit trails</li>
                    </ul>
                </div>

                <h2 id="activation">Premium Activation</h2>

                <h3>Automatic Activation</h3>
                <div class="command-card">
                    <h4>How Premium Activates</h4>
                    <ul>
                        <li><strong>Server Premium:</strong> Immediate activation for server owner</li>
                        <li><strong>User Premium:</strong> Applies to all servers you join</li>
                        <li><strong>Payment Confirmation:</strong> Email receipt within minutes</li>
                        <li><strong>Premium Badge:</strong> Appears in <code>/config</code> panel</li>
                        <li><strong>Feature Access:</strong> All premium features unlock immediately</li>
                    </ul>
                    
                    <h4>Activation Timeline</h4>
                    <ol>
                        <li><strong>0-5 minutes:</strong> Payment processing</li>
                        <li><strong>5-15 minutes:</strong> System activation</li>
                        <li><strong>15+ minutes:</strong> Full feature availability</li>
                    </ol>
                </div>

                <h3>Manual Activation</h3>
                <div class="command-card">
                    <h4>If Premium Doesn't Activate Automatically</h4>
                    <ol>
                        <li><strong>Wait 15 minutes:</strong> System needs time to process</li>
                        <li><strong>Use <code>/config</code>:</strong> Check and refresh premium status</li>
                        <li><strong>Verify Payment:</strong> Check your payment method was charged</li>
                        <li><strong>Contact Support:</strong> Include purchase receipt and details</li>
                    </ol>
                    
                    <h4>Required Information for Support</h4>
                    <ul>
                        <li>Discord Server ID and User ID</li>
                        <li>Transaction ID or payment confirmation</li>
                        <li>Receipt or confirmation email</li>
                        <li>Payment method used</li>
                    </ul>
                </div>

                <h2 id="support">Premium Support</h2>

                <div class="command-card">
                    <h3>Premium Support Benefits</h3>
                    
                    <h4>Priority Response Times</h4>
                    <p><em>Note: Response times are estimated, not guaranteed. Actual times may vary based on support volume and issue complexity.</em></p>
                    <ul>
                        <li><strong>Lifetime Premium:</strong> 2-6 hours estimated response</li>
                        <li><strong>Premium User:</strong> 6-12 hours estimated response</li>
                        <li><strong>Premium Server:</strong> 12-24 hours estimated response</li>
                        <li><strong>Free Users:</strong> 24-48 hours estimated response</li>
                    </ul>
                    
                    <h4>Enhanced Support Features</h4>
                    <ul>
                        <li><strong>Direct Developer Access:</strong> Contact development team directly</li>
                        <li><strong>Custom Setup Assistance:</strong> Personalized configuration help</li>
                        <li><strong>Advanced Troubleshooting:</strong> Detailed technical support</li>
                        <li><strong>Feature Requests:</strong> Priority consideration for new features</li>
                        <li><strong>Beta Access:</strong> Early access to new features</li>
                        <li><strong>Custom Integrations:</strong> Help with specialized setups</li>
                    </ul>
                    
                    <h4>Support Channels</h4>
                    <ul>
                        <li><strong>Discord VIP Channels:</strong> Premium-only support channels</li>
                        <li><strong>Priority Email:</strong> Fast-track email support</li>
                        <li><strong>Direct Developer Contact:</strong> For complex technical issues</li>
                        <li><strong>Video Calls:</strong> Available for Lifetime Premium (by appointment)</li>
                    </ul>
                </div>

                <h2 id="billing">Billing Information</h2>

                <h3>Payment Methods & Billing</h3>
                <div class="command-card">
                    <h4>Accepted Payment Methods</h4>
                    <ul>
                        <li><strong>Credit/Debit Cards:</strong> Visa, MasterCard, American Express</li>
                        <li><strong>PayPal:</strong> Available through Stripe integration</li>
                        <li><strong>Bank Transfers:</strong> Contact support for alternative methods</li>
                        <li><strong>Business Accounts:</strong> Invoice payments available</li>
                    </ul>
                    
                    <h4>Billing Cycles</h4>
                    <ul>
                        <li><strong>Monthly Plans:</strong> Billed every 30 days</li>
                        <li><strong>Annual Plans:</strong> Billed yearly with 33% savings</li>
                        <li><strong>Lifetime:</strong> One-time payment, no recurring charges</li>
                        <li><strong>Automatic Renewal:</strong> Unless cancelled before period ends</li>
                    </ul>
                    
                    <h4>Managing Your Subscription</h4>
                    <ol>
                        <li>Access customer portal via email link</li>
                        <li>Update payment methods securely</li>
                        <li>Cancel or modify subscription</li>
                        <li>Download invoices and receipts</li>
                        <li>View billing history</li>
                    </ol>
                    
                    <h4>Cancellation Policy</h4>
                    <ul>
                        <li><strong>Cancel Anytime:</strong> No cancellation fees</li>
                        <li><strong>Access Until Period Ends:</strong> Full access until subscription expires</li>
                        <li><strong>Data Retention:</strong> Configurations saved for 30 days</li>
                        <li><strong>Easy Reactivation:</strong> Restore settings when resubscribing</li>
                    </ul>
                    
                    <h4>Refund Policy</h4>
                    <p>Please refer to our <a href="https://nexibot.uk/refund" target="_blank">refund policy documentation</a> for detailed information about refunds and cancellations.</p>
                </div>

                <h2 id="faq">Frequently Asked Questions</h2>

                <div class="command-grid">
                    <div class="command-card">
                        <h4>Q: Do I need premium for each server?</h4>
                        <p><strong>A:</strong> No! User premium covers all servers you're in. Server premium is tied to one specific server. Choose the option that best fits your needs.</p>
                    </div>

                    <div class="command-card">
                        <h4>Q: What happens if I cancel premium?</h4>
                        <p><strong>A:</strong> Premium features are disabled but your configurations are saved for 30 days. If you resubscribe within that time, all settings are restored automatically.</p>
                    </div>

                    <div class="command-card">
                        <h4>Q: Can I upgrade from monthly to lifetime?</h4>
                        <p><strong>A:</strong> Yes! Contact support for upgrade pricing. We'll credit your monthly payments toward the lifetime cost.</p>
                    </div>

                    <div class="command-card">
                        <h4>Q: Do premium features work immediately?</h4>
                        <p><strong>A:</strong> Most features activate instantly after purchase. Some integrations may require API key setup. The bot will guide you through any necessary configuration.</p>
                    </div>

                    <div class="command-card">
                        <h4>Q: Is there a free trial?</h4>
                        <p><strong>A:</strong> We don't offer standard free trials, but this can be discussed with our support/billing team by raising a ticket for special cases.</p>
                    </div>

                    <div class="command-card">
                        <h4>Q: Can I transfer premium between servers?</h4>
                        <p><strong>A:</strong> User premium works everywhere automatically. Server premium is tied to one server, but the person who purchased it can transfer it by contacting support.</p>
                    </div>

                    <div class="command-card">
                        <h4>Q: What if I have billing issues?</h4>
                        <p><strong>A:</strong> Contact our billing team immediately with transaction details. We'll resolve payment issues quickly and restore access if needed.</p>
                    </div>

                    <div class="command-card">
                        <h4>Q: Are there discounts for large communities?</h4>
                        <p><strong>A:</strong> Yes! Contact support for bulk pricing on multiple server licenses or large community discounts.</p>
                    </div>

                    <div class="command-card">
                        <h4>Q: Can I pay annually to save money?</h4>
                        <p><strong>A:</strong> Absolutely! Annual subscriptions save you £16 per year (33% savings) compared to monthly billing.</p>
                    </div>

                    <div class="command-card">
                        <h4>Q: Is my payment information secure?</h4>
                        <p><strong>A:</strong> Yes! All payments are processed through Stripe, which is PCI DSS compliant and trusted by millions of businesses worldwide.</p>
                    </div>
                </div>

                <div class="cta-section" style="margin: 60px 0;">
                    <div style="text-align: center; padding: 60px 40px; background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); border-radius: var(--border-radius-lg);">
                        <h2 style="color: white; margin-bottom: 20px;">Ready to Transform Your Server?</h2>
                        <p style="color: rgba(255, 255, 255, 0.9); font-size: 1.2rem; margin-bottom: 40px; max-width: 600px; margin-left: auto; margin-right: auto;">Join lots of Discord communities already using Nexi Premium to create more engaging, automated, and successful servers.</p>
                        
                        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                            <a href="https://nexibot.uk/features" target="_blank" class="btn" style="background: white; color: var(--primary-color); font-weight: 700; padding: 16px 32px; font-size: 1.1rem;">Upgrade to Premium</a>
                            <a href="https://discord.gg/nexibot" class="btn" style="background: transparent; color: white; border: 2px solid white; padding: 16px 32px; font-size: 1.1rem;" target="_blank">Ask Questions</a>
                        </div>
                        
                        <div style="margin-top: 30px; color: rgba(255, 255, 255, 0.8); font-size: 0.9rem;">
                            <p>Secure payments • Cancel anytime • Premium support • Instant activation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
